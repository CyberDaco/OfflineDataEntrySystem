<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Batch;

use App\Http\Requests\BatchRequest;
use App\Http\Requests\BatchFindRequest;
use App\Http\Requests\BatchSatAuctionRequest;
use Carbon\Carbon;
use App\Publication;
use App\JobNumber;
use App\Application;

class BatchController extends Controller
{
    public function __construct(){
        $this->middleware('admin',['except'=>array('find','find_sat_auction')]);
    }
    
    public function store(BatchRequest $request){
        Batch::create($request->all());

        return redirect()->back();
    }

    public function modify(Batch $batch_id){
        return \Response::json($batch_id);
    }
   
    public function update(Batch $batch_id, Request $request) {
        $batch_id->update($request->all());
        $batch = Batch::find($batch_id->id);
        return redirect()->back();
    }
    
   public function destroy(Request $request){
       $record = Batch::findorfail($request->delete_id);
       $record->delete();
       return redirect()->back();
   } 
   
   
   public function find(BatchFindRequest $request)
    {
        $job_date = Carbon::createFromFormat('d/m/Y',$request->batch_date);
        $batch_date = Carbon::createFromFormat('Ymd',substr($request->batch_name,-13,8));
        $batch_code = substr($request->batch_name,-17,3); // ABC_20161101_S_01

        $code = Publication::where('pub_name',$request->job_name)->get()->first();

        if ($batch_code != $code->code){
            flash()->info('Three letters Code does not match with the Publication selected!');
            return redirect()->back()->withInput();
        }


        if ($job_date->format('Y-m-d') != $batch_date->format('Y-m-d')){
            flash()->info('Publication Date & Batch Name does not match!');
            return redirect()->back()->withInput();
        }


        $batch = Batch::where('job_name',$request->job_name)->where('batch_date',$job_date->format('Y-m-d'))->first();

         if ($batch){
             if ($batch->job_status != 'Open'){
                 flash()->info('Batch not open for entry! Contact Administrator!');
                 return redirect()->back()->withInput();
             }

             $job_number = JobNumber::where('application',$batch->job_name)
                ->where('current_month',Carbon::now()->startOfMonth())
                ->where('section',substr($request->batch_name,-4,1))
                ->where('job_number',$request->job_number)
                ->where('job_date', $job_date->startOfMonth())
                ->first();


            if(!$job_number){
                flash()->info('Job Number Not found');
                return redirect()->back()->withInput();
            }

        }


        if($batch && $job_number){
            session()->put('batch_details',$batch);
            session()->put('batch_name',$request->batch_name);
            session()->put('jobnumber',$job_number);

            $get_url = Application::where('application_name',$batch->application)->get()->first();
            return redirect($get_url->folder_path.'/view');
        } else {
            flash()->info('No Record found!!');
            return redirect()->back()->withInput();
        }

    }

    public function find_sat_auction(BatchSatAuctionRequest $request)
    {
        $job_date = Carbon::createFromFormat('d/m/Y',$request->batch_date);
        //$batch_date = Carbon::createFromFormat('Ymd',substr($request->batch_name,-13,8));
        //$batch_code = substr($request->batch_name,-17,3); // ABC_20161101_S_01

        //$code = Publication::where('pub_name',$request->job_name)->get()->first();

        //if ($batch_code != $code->code){
        //    flash()->info('Three letters Code does not match with the Publication selected!');
        //    return redirect()->back()->withInput();
        //}


        //if ($job_date->format('Y-m-d') != $batch_date->format('Y-m-d')){
        //    flash()->info('Publication Date & Batch Name does not match!');
        //    return redirect()->back()->withInput();
        //}


        $batch = Batch::where('job_name',$request->job_name)->where('batch_date',$job_date->format('Y-m-d'))->first();

        if ($batch){
            if ($batch->job_status != 'Open'){
                flash()->info('Batch not open for entry! Contact Administrator!');
                return redirect()->back()->withInput();
            }

            $job_number = JobNumber::where('application',$batch->job_name)
                ->where('current_month',Carbon::now()->startOfMonth())
                //->where('section',substr($request->batch_name,-4,1))
                ->where('job_number',$request->job_number)
                ->where('job_date', $job_date->startOfMonth())
                ->first();


            if(!$job_number){
                flash()->info('Job Number Not found');
                return redirect()->back()->withInput();
            }

        }


        if($batch && $job_number){
            session()->put('batch_details',$batch);
            session()->put('batch_name',$request->batch_name);
            session()->put('jobnumber',$job_number);

            $get_url = Application::where('application_name',$batch->application)->get()->first();
            return redirect($get_url->folder_path.'/view');
        } else {
            flash()->info('No Record found!!');
            return redirect()->back()->withInput();
        }

    }



}
