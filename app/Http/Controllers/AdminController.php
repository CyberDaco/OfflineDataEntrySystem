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
    public function showinterest(){
        $batches = Batch::where('application','Interest Auction Results')->get();
        return view('admin.batch.interest',compact('batches'));
    }

    public function showrecent_sales(){
        $batches = Batch::where('application','Recent Sales')->get();
        return view('admin.batch.recent_sales',compact('batches'));
    }

    public function showaunews(){
        $batches = Batch::where('application','Australian Newspapers')->get();
        return view('admin.batch.aunews',compact('batches'));
    }
    
     public function showreanz(){
        $batches = Batch::where('application','REA NZ Keying')->get();
        return view('admin.batch.reanz',compact('batches'));
    }

    public function showsatauction(){
        $batches = Batch::where('application','Saturday Auction')->get();
        return view('admin.batch.sat_auction',compact('batches'));
    }








    public function showproduction(){
        return view('admin.report.production');
    }

    /** Export Menu */

    public function showinterestexport(){
        $results = null;
        $default_date = Carbon::now()->format('d/m/Y');
        return view('admin.export.interest',compact('results','default_date'));
    }

    public function showrecentsalesexport(){
        $results = null;
        $default_date = Carbon::now()->format('d/m/Y');
        return view('admin.export.recent_sales',compact('results','default_date'));
    }

    public function showsatauctionexport(){
        $results = null;
        $default_date = Carbon::now()->format('d/m/Y');
        return view('admin.export.sat_auction',compact('results','default_date'));
    }

    public function showreanzexport(){
        $results = null;
        $default_date = Carbon::now()->format('d/m/Y');
        return view('admin.export.reanz',compact('results','default_date'));
    }


    public function logout(){
        Auth::guard('admin')->user()->logout();
        session()->flush();
        return \Redirect::view('/');
    }
    
    
    
    
    
   
    
}
