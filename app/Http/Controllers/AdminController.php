<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use App\Batch;
use App\Publication;
use App\JobNumber;
use App\AUPostCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function index(){
        return view('admin.dashboard');
    }
    
    public function showuser(){
        return view('admin.sysusers');
    }
    
    public function showjobnumber(){
        return view('admin.jobnumbers');
    }


    /** Batch Menu */
    public function batch_interest(){
        $batches = Batch::where('application','Interest Auction Results')->get();
        return view('admin.batch.interest',compact('batches'));
    }

    public function batch_recent_sales(){
        $batches = Batch::where('application','Recent Sales')->get();
        return view('admin.batch.recent_sales',compact('batches'));
    }

    public function batch_aunews(){
        $batches = Batch::where('application','Australian Newspapers')->get();
        return view('admin.batch.aunews',compact('batches'));
    }
    
    public function batch_reanz(){
        $batches = Batch::where('application','REA NZ Keying')->get();
        return view('admin.batch.reanz',compact('batches'));
    }

    public function batch_sat_auction(){
        $batches = Batch::where('application','Saturday Auction')->get();
        return view('admin.batch.sat_auction',compact('batches'));
    }


    /** Report Menu */
    public function showproduction(){
        return view('admin.report.production');
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
                ->select('batch_id','batch_name', DB::raw('COUNT(batch_name) as records'))
                ->groupBy('batch_name')
                ->orderBy('state','batch_name')
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
                ->select('batch_id','batch_name', DB::raw('COUNT(batch_name) as records'))
                ->groupBy('batch_name')
                ->orderBy('batch_name')
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






    public function logout(){
        Auth::guard('admin')->user()->logout();
        session()->flush();
        return \Redirect::view('/');
    }
    
    
    
    
    
   
    
}
