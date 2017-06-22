<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserLog;

use Carbon\Carbon;

use DB;

class ReportController extends Controller
{
    public function __construct(){
        $this->middleware('admin'); 
    }

    public function export_report_stats(Request $request){

        $production_date = Carbon::createFromFormat('d/m/Y', $request->prod_date);

        $current_month = $production_date->copy()->startOfMonth()->format('Y-m-d');

        $export = DB::table('job_numbers')
            ->join('entry_logs','job_numbers.id','=','entry_logs.jobnumber_id')
            ->whereDate('current_month','=',$current_month)
            ->whereDate('entry_logs.end','=',$production_date->format('Y-m-d'))
            ->wherein('entry_logs.action',array('E','I','V'))
            ->select(DB::raw("count(user_id) as records"),
                DB::raw("DATE_FORMAT(start,'%y') as year"),
                DB::raw('DAYOFYEAR(start) as julian'),
                DB::raw('TIME_FORMAT(SEC_TO_TIME(SUM(UNIX_TIMESTAMP(end) - UNIX_TIMESTAMP(start))),"%h %i") as hours'),
                'entry_logs.action','job_numbers.job_number',
                'job_numbers.stats_output','entry_logs.start','entry_logs.end','entry_logs.user_id',
                DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds'))
            ->groupBy('job_number','user_id','action')
            ->orderBy('job_number')
            ->get();

        $file = fopen('output.txt','w+');

        foreach($export as $row)
        {
            fwrite($file,$row->action."       ");
            fwrite($file,"0".$row->job_number."        ");
            for($i=strlen($row->user_id);$i <= 2; $i++){
                fwrite($file,"0");
            }
            fwrite($file,$row->user_id);
            fwrite($file,$row->stats_output);
            for($j=strlen($row->stats_output);$j <= 15; $j++){
                fwrite($file," ");
            }
            fwrite($file,$row->year);
            for($i=strlen($row->julian);$i <= 2; $i++){
                fwrite($file,"0");
            }
            fwrite($file,$row->julian."      ");

            fwrite($file,sprintf("%02d", intval($row->seconds/3600)));
            fwrite($file," ");
            fwrite($file,sprintf($row->seconds/60%60));

            fwrite($file,"          ");

            fwrite($file,sprintf("%02d", intval($row->seconds/3600)));
            fwrite($file," ");
            fwrite($file,sprintf($row->seconds/60%60));

            for($i=strlen($row->records);$i <= 4; $i++){
                fwrite($file," ");
            }
            fwrite($file,$row->records);
            fwrite($file,"\r\n");
        }

        //close the file
        fclose($file);

        $headers = array(
            'Content-Type' => 'text/csv',
        );

        return response()->download('output.txt','output.txt', $headers);
    }
}

