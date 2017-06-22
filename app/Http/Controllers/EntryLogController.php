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
        //$entry_logs = \DB::table('entry_logs')
            //->select(DB::raw('count(*) as user_count, status'))
          //  ->where('action','E')
           // ->where('user_id',531)
           // ->groupBy('user_id')
           // ->get();

        //dd($entry_logs);

        $entry_logs = UserLog::with('log','job_log')
                ->where('user_id',531)
                ->where('action','E')
                ->orderBy('created_at','desc')
                ->take(50000)->get();


        return view('admin.utility.entrylog',compact('entry_logs'));
    }
}
