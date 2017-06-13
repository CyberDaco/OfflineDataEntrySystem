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
}

