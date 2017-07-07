<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;

use Carbon\Carbon;


class TestController extends Controller
{

    public function storage(){
        //$filename = $code.'_'.Carbon::yesterday()->format('Ymd').'.csv';

        $path = storage_path('app\REA NZ Keying\reanz_20170701.csv');
        $path2 = Storage::url('app');

        return $path;


        if (($handle = fopen ( $path, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                echo "hi"."<br>";
            }
            fclose ( $handle );
        }

        return 'hi';
    }




}
