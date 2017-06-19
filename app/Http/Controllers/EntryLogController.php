<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\UserLog;

class EntryLogController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    
    public function view(Request $request){
        //$entry_logs = UserLog::groupby('batch_id','batch_name')->orderBy('batch_id')->get();
        $entry_logs = UserLog::with('log','job_log')->take(50000)->get();
        return view('admin.utility.entrylog',compact('entry_logs'));
    }
}
