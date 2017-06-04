<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ApplicationRequest;

use App\Application;

class ApplicationController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function applicationview(){
        $results = Application::all();
        return view('/admin/setup/application/view', compact('results'));
    }
    
    public function applicationadd(){
        return view('/admin/setup/application/add');
    }
    
    public function applicationstore(ApplicationRequest $request){
        $application = Application::create($request->all());
        return redirect('admin/setup/application/view');
    }
    
    public function applicationedit(Application $application){
        $results = $application;
        return view('admin.setup.application.edit', compact('results'));
    }
    
     public function applicationupdate(Request $request, Application $application){
        $application->update($request->all());
        return redirect('admin/setup/application/view');
    }
    
     public function applicationdelete(Request $request){
        $record = Application::findorfail($request->delete_id);
        $record->delete();
        
        flash()->info('Deleted!');
        return redirect()->back();
    }
    
}
