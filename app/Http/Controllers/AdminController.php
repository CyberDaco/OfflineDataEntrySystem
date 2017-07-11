<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Batch;
use App\Publication;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\UserLog;
use App\User;
use App\FileEntry;
use App\Reanz;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    /** Dashboard */
    public function index(){
        $results = Batch::whereBetween('exported_at',[Carbon::now()->startOfMonth(),Carbon::now()])
            ->get();
        return view('admin.dashboard',compact('results'));
    }

    /** Batch Menu */
    public function batch_interest(){
        $batches = Batch::where('application','Interest Auction Results')->where('job_status','Open')->get();
        return view('admin.batch.interest',compact('batches'));
    }

    public function batch_recent_sales(){
        $batches = Batch::where('application','Recent Sales')->where('job_status','Open')->get();
        return view('admin.batch.recent_sales',compact('batches'));
    }

    public function batch_aunews(){
        $batches = Batch::where('application','Australian Newspapers')->where('job_status','Open')->get();
        return view('admin.batch.aunews',compact('batches'));
    }

    public function batch_reanz(){
        $batches = Batch::where('application','REA NZ Keying')->where('job_status','Open')->get();
        return view('admin.batch.reanz',compact('batches'));
    }

    public function batch_sat_auction(){
        $batches = Batch::where('application','Saturday Auction')->where('job_status','Open')->get();
        return view('admin.batch.sat_auction',compact('batches'));
    }


    /** Export Menu */
    public function export_saturday_auction(Request $request){
        $job_date = $request->job_date ? Carbon::createFromFormat('d/m/Y', $request->job_date) : Carbon::now();
        $job_name = $request->job_name ? $request->job_name : Publication::where('application','Saturday Auction')->first()->pub_name;

        $batch = Batch::where('job_name',$job_name)
            ->where('batch_date',$job_date->format('Y-m-d'))
            ->get()->first();

        if($batch){
            $results = $batch->recent_sales()
                ->leftJoin('entry_logs', 'entry_logs.record_id', '=', 'recent_sales.id')
                ->select('recent_sales.batch_id','recent_sales.batch_name', DB::raw('COUNT(recent_sales.batch_name) as records'),
                    DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start))) as hours'),
                    DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds'))
                ->where('entry_logs.action','E')
                ->where('entry_logs.batch_id',$batch->id)
                ->groupBy('recent_sales.batch_name')
                ->orderBy('recent_sales.state','recent_sales.batch_name')
                ->get();
        } else {
            $results = null;
        }

        return view('admin.export.sat_auction',compact('results','job_date','job_name','batch'));
    }

    public function export_reanz(Request $request){

        $job_date = $request->job_date ? Carbon::createFromFormat('d/m/Y', $request->job_date) : Carbon::now();
        $job_name = $request->job_name ? $request->job_name : Publication::where('application','REA NZ Keying')->first()->pub_name;

        $batch = Batch::where('job_name',$job_name)
            ->where('batch_date',$job_date->format('Y-m-d'))
            ->get()->first();


        if($batch){
              $results = $batch->reanzs()
                ->leftJoin('entry_logs', 'entry_logs.record_id', '=', 'reanzs.id')
                ->select('reanzs.batch_id','reanzs.batch_name', DB::raw('COUNT(reanzs.batch_name) as records'),
                  DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start))) as hours'),
                  DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds'))
                ->where('entry_logs.action','E')
                ->where('entry_logs.batch_id',$batch->id)
                ->groupBy('reanzs.batch_name')
                ->orderBy('reanzs.batch_name')
                ->get();
        } else {
            $results = null;
        }

        return view('admin.export.reanz',compact('results','job_date','job_name','batch'));
    }

    public function export_interest(Request $request){

        $job_date = $request->job_date ? Carbon::createFromFormat('d/m/Y', $request->job_date) : Carbon::now();
        $job_name = $request->job_name ? $request->job_name : Publication::where('application','Interest Auction Results')->first()->pub_name;

        $batch = Batch::where('job_name','Interest Auction Results')
            ->where('batch_date',$job_date->format('Y-m-d'))
            ->get()->first();

        if($batch){
            $results = $batch->interests()
                ->select('batch_id','batch_name', DB::raw('COUNT(batch_name) as records'))
                ->groupBy('batch_name')
                ->orderBy('batch_name')
                ->get();
        } else {
            $results = null;
        }

        return view('admin.export.interest',compact('results','job_date','job_name','batch'));
    }

    public function export_recent_sales(Request $request){

        $job_date = $request->job_date ? Carbon::createFromFormat('d/m/Y', $request->job_date) : Carbon::now();
        $job_name = $request->job_name ? $request->job_name : Publication::where('application','Recent Sales')->first()->pub_name;

        $batch = Batch::where('job_name',$request->job_name)
            ->where('batch_date',$job_date->format('Y-m-d'))
            ->get()->first();

        if($batch){
            $results = $batch->recent_sales()
                ->select('batch_id','batch_name', DB::raw('COUNT(batch_name) as records'))
                ->groupBy('batch_name')
                ->orderBy('batch_name')
                ->get();
        } else {
            $results = null;
        }

        return view('admin.export.recent_sales',compact('results','job_date','job_name','batch'));
    }

    /** Report Menu */
    public function report_production(Request $request){

        $from = $request->date_from ? Carbon::createFromFormat('d/m/Y', $request->date_from)->startOfDay() : Carbon::now();
        $to = $request->date_to ? Carbon::createFromFormat('d/m/Y', $request->date_to)->endOfDay() : Carbon::now();
        $user_id = $request->user_id ? $request->user_id : "";

        if($user_id == ""){
            $results = collect(DB::table('entry_logs')
                ->leftJoin('batches', 'entry_logs.batch_id', '=', 'batches.id')
                ->select('batches.batch_date','batches.job_name','entry_logs.user_id','entry_logs.batch_name','entry_logs.action',
                    DB::raw('COUNT(entry_logs.user_id) as records'),
                    DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start))) as hours'),
                    DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds'))
                ->whereBetween('entry_logs.end',[$from,$to])
                ->whereIn('entry_logs.action',array('E','V'))
                ->groupBy('entry_logs.user_id','entry_logs.batch_name','entry_logs.action','batches.job_name')
                ->get());
        } else {
            $results = collect(DB::table('entry_logs')
                ->leftJoin('batches', 'entry_logs.batch_id', '=', 'batches.id')
                ->select('batches.batch_date','batches.job_name','entry_logs.user_id','entry_logs.batch_name','entry_logs.action',
                    DB::raw('COUNT(entry_logs.user_id) as records'),
                    DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start))) as hours'),
                    DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds')
                    )
                ->whereBetween('entry_logs.end',[$from,$to])
                ->where('entry_logs.user_id',$request->user_id)
                ->whereIn('entry_logs.action',array('E','V'))
                ->groupBy('entry_logs.user_id','entry_logs.batch_name','entry_logs.action','batches.job_name')
                ->get());
        }

        return view('admin.report.production',compact('results','from','to','user_id'));
    }

    public function report_stats(Request $request){

        $production_date = $request->production_date ? Carbon::createFromFormat('d/m/Y', $request->production_date) : Carbon::now();

        //$results = UserLog::whereIn('action', array('E', 'I', 'V'))
          //  ->whereDate('entry_logs.end','=',$production_date->format('Y-m-d'))
           // ->get();


        $current_month = $production_date->copy()->startOfMonth()->format('Y-m-d');

        $results = DB::table('job_numbers')
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

        return view('admin.report.stats',compact('results','production_date'));
    }

    public function report_recs_per_hour(Request $request){
        $from = $request->date_from ? Carbon::createFromFormat('d/m/Y', $request->date_from)->startOfDay() : Carbon::now();
        $to = $request->date_to ? Carbon::createFromFormat('d/m/Y', $request->date_to)->endOfDay() : Carbon::now();
        $user_id = $request->user_id ? $request->user_id : "";

        if($user_id == ""){
            $results = collect(DB::table('entry_logs')
                ->leftJoin('batches', 'entry_logs.batch_id', '=', 'batches.id')
                ->leftJoin('users','entry_logs.user_id','=','users.operator_id')
                ->select('users.firstname','users.lastname','batches.batch_date','batches.job_name','entry_logs.user_id','entry_logs.batch_name','entry_logs.action',
                    DB::raw('COUNT(entry_logs.user_id) as records'),
                    DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start))) as hours'),
                    DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds'),
                    DB::raw('COUNT(entry_logs.user_id) / (SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) / 3600) as recs_per_hour'))
                ->whereBetween('entry_logs.end',[$from,$to])
                ->whereIn('entry_logs.action',array('E','V'))
                ->orderBy('batches.job_name','asc')
                ->orderBy('recs_per_hour','desc')
                ->groupBy('entry_logs.user_id','entry_logs.action','batches.job_name')
                ->get());
        } else {
            $results = collect(DB::table('entry_logs')
                ->leftJoin('batches', 'entry_logs.batch_id', '=', 'batches.id')
                ->leftJoin('users','entry_logs.user_id','=','users.operator_id')
                ->select('users.firstname','users.lastname','batches.batch_date','batches.job_name','entry_logs.user_id','entry_logs.batch_name','entry_logs.action',
                    DB::raw('COUNT(entry_logs.user_id) as records'),
                    DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start))) as hours'),
                    DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds'),
                    DB::raw('COUNT(entry_logs.user_id) / (SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) / 3600) as recs_per_hour'))
                ->whereBetween('entry_logs.end',[$from,$to])
                ->where('entry_logs.user_id',$request->user_id)
                ->whereIn('entry_logs.action',array('E','V'))
                ->orderBy('batches.job_name','asc')
                ->orderBy('recs_per_hour','desc')
                ->groupBy('entry_logs.user_id','entry_logs.action','batches.job_name')
                ->get());
        }

        return view('admin.report.recs_per_hour',compact('results','from','to','user_id'));
    }

    public function report_job_export(Request $request){

        $from = $request->date_from ? Carbon::createFromFormat('d/m/Y', $request->date_from)->startOfDay() : Carbon::now();
        $to = $request->date_to ? Carbon::createFromFormat('d/m/Y', $request->date_to)->endOfDay() : Carbon::now();
        $app = $request->application ? $request->application : "all";

        if($app == "all"){
            $results = Batch::where('job_status','Closed')
                ->whereBetween('export_date',[$from->format('Y-m-d'),$to->format('Y-m-d')])
                ->orderBy('application','asc')
                ->orderBy('exported_at','asc')
                ->get();
        } else {
            $results = Batch::where('job_status','Closed')
                ->where('application',$app)
                ->whereBetween('export_date',[$from->format('Y-m-d'),$to->format('Y-m-d')])
                ->orderBy('application','asc')
                ->orderBy('exported_at','asc')
                ->get();
        }

        return view('admin.report.job_export',compact('results','from','to','app'));
    }

    public function report_job_number(Request $request){

        $from = $request->date_from ? Carbon::createFromFormat('d/m/Y', $request->date_from)->startOfDay() : Carbon::now()->startOfMonth();
        $to = $request->date_to ? Carbon::createFromFormat('d/m/Y', $request->date_to)->endOfDay() : Carbon::now();
        $job_number = $request->job_number ? $request->job_number : "";

        if($job_number == ""){
            $results = collect(DB::table('batches')
                ->select('jobnumber',DB::raw('SUM(records) as records'),'hours')
                ->whereBetween('exported_at',[$from,$to])
                ->where('job_status','Closed')
                ->groupBy('jobnumber')
                ->get());

        } else {
            $results = collect(DB::table('batches')
                ->select('jobnumber',DB::raw('SUM(records) as records'),'hours')
                ->whereBetween('exported_at',[$from,$to])
                ->where('job_status','Closed')
                ->where('jobnumber',$job_number)
                ->get());
        }

        return view('admin.report.job_number',compact('results','from','to','job_number'));
    }

    public function report_productivity(Request $request){
        $from = $request->date_from ? Carbon::createFromFormat('d/m/Y', $request->date_from)->startOfDay() : Carbon::now();
        $to = $request->date_to ? Carbon::createFromFormat('d/m/Y', $request->date_to)->endOfDay() : Carbon::now();
        $user_id = $request->user_id ? $request->user_id : "";

        if($user_id == ""){
            $results = User::with('entry_logs.job_log')
                ->get();
        } else {
            $results = User::where('operator_id',$request->user_id)->get();
        }


        return view('admin.report.productivity',compact('results','from','to','user_id'));
    }

    public function import_reanz(){
        $results = FileEntry::where('application','REA NZ Keying')->get();
        return view('admin.import.reanz',compact('results'));
    }

    public function import_recent_sales(){
        $results = FileEntry::where('application','Recent Sales')->get();
        return view('admin.import.recent_sales',compact('results'));
    }

    public function import_saturday_auction(){
        $results = FileEntry::where('application','Saturday Auction')->get();
        return view('admin.import.saturday_auction',compact('results'));
    }

    public function import_interest(){
        $results = FileEntry::where('application','Interest Auction Results')->get();
        return view('admin.import.interest',compact('results'));
    }

    /** Setup Menu */
    public function showuser(){
        return view('admin.sysusers');
    }
    
    public function showjobnumber(){
        return view('admin.jobnumbers');
    }

    public function logout(){
        Auth::guard('admin')->user()->logout();
        session()->flush();
        return \Redirect::view('/');
    }
    
    
    
    
    
   
    
}
