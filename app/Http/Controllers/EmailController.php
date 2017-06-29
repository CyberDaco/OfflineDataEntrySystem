<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail;

class EmailController extends Controller
{
    public function sample(){

        //$data = array('name'=>"Virat Gandhi");

        //Mail::send(['html'=>'mail.mail'], $data, function($message) {
          //  $message->to('abc@gmail.com', 'Tutorials Point')->subject
          //  ('Laravel Basic Testing Mail');
          ///  $message->from('xyz@gmail.com','Virat Gandhi');
        //});

        Mail::raw('Exporting has been easier!', function ($message) {
            $message->to('sunjhen29@yahoo.com', 'Sunday Doctolero')
                    ->subject('Laravel Basic Testing Mail');
        });

        return 'success';
    }
}
