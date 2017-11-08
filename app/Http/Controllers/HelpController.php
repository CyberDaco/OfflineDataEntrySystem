<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelpController extends Controller
{
    public function help(){
        return view('help.help');
    }
}
