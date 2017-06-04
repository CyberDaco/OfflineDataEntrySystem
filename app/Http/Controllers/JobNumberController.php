<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\JobNumberRequest;

use App\JobNumber;

class JobNumberController extends Controller
{

    public function __construct(){
        $this->middleware('admin');
    }

    public function jobnumberview(){
        
        $results = JobNumber::all();


        return view('admin.setup.jobnumber.view', compact('results'));
    }
    
    public function jobnumberadd(){

        return view('admin.setup.jobnumber.add');
        
    }
    
    public function jobnumberstore(JobNumberRequest $request){
                
        $jobnumber = JobNumber::create($request->all());
        return redirect('admin/setup/jobnumber/view');
    }
    
    public function jobnumberedit(JobNumber $jobnumber){
        
        $results = $jobnumber;
        return view('admin.setup.jobnumber.edit', compact('results'));
    }
    
    public function jobnumberupdate(Request $request, JobNumber $jobnumber){
        
        $jobnumber->update($request->all());
        return redirect('admin/setup/jobnumber/view');
        
    }
    
    public function jobnumberdelete(Request $request){
        $record = JobNumber::findorfail($request->delete_id);
        $record->delete();
        
        flash()->info('Deleted!');
        return redirect()->back();
    }
}
