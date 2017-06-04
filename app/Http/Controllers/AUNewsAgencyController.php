<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AUNewsAgency;

class AUNewsAgencyController extends Controller
{
    public function search($contact){
         $result = AUNewsAgency::where('agent_contact',$contact)->orderBy('created_at','desc')->first();
         return \Response::json($result);
     }
}
