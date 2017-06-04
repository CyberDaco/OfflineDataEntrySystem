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
    
    public function productionreport(Request $request){
        $from = Carbon::createFromFormat('d/m/Y', $request->date_from)->startOfDay();
        $to = Carbon::createFromFormat('d/m/Y', $request->date_to)->endOfDay();
        
        if($request->user_id == ""){
        $reports = DB::table('entry_logs')
                    ->select('user_id','batch_name','action',DB::raw('COUNT(user_id) as records'),DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(end) - UNIX_TIMESTAMP(start))) as hours'))
                    ->whereBetween('end',[$from,$to])
                    ->whereIn('action',array('E','V'))
                    ->groupBy('user_id','batch_name','action')
                    ->get();
        } else {
        $reports = DB::table('entry_logs')
                    ->select('user_id','batch_name','action',DB::raw('COUNT(user_id) as records'),DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(end) - UNIX_TIMESTAMP(start))) as hours'))
                    ->whereBetween('end',[$from,$to])
                    ->where('user_id',$request->user_id)
                    ->whereIn('action',array('E','V'))
                    ->groupBy('user_id','batch_name','action')
                    ->get();    
        }
        return \Response::json($reports); 
    }
}

