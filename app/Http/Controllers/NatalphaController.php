<?php

namespace App\Http\Controllers;

use App\Sat_Auction;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\AUPostCode;
use App\NewsOffline;


class NatalphaController extends Controller
{
    public function view(){
        $results = AUPostCode::all();
        return view('admin.lookup.natalpha',compact('results'));
    }

    public function import(Request $request){
        $filename = $request->file('csv')->getClientOriginalName();
        $request->file('csv')->move(base_path() . '/storage/upload/natalpha/',$filename);

        AUPostCode::truncate();

        if (($handle = fopen ( base_path() . '/storage/upload/natalpha/'.$filename, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                $csv_data = new AUPostCode();
                $csv_data->state = $data [1];
                $csv_data->suburb = $data [2];
                $csv_data->post_code = $data [3];
                $csv_data->save ();
            }
           fclose ( $handle );
        }
        return redirect()->back();
    }
}
