<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SatAuctionStExtension;

class SatAuctionStExtensionController extends Controller
{
    public function view(){
        $results = SatAuctionStExtension::all();
        return view('admin.lookup.sat_auction_st_extension',compact('results'));
    }

    public function import(Request $request){
        $filename = $request->file('csv')->getClientOriginalName();
        $request->file('csv')->move(base_path() . '/storage/upload/st_extension/',$filename);

        SatAuctionStExtension::truncate();

        if (($handle = fopen ( base_path() . '/storage/upload/st_extension/'.$filename, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                $csv_data = new SatAuctionStExtension();
                $csv_data->name = $data [1];
                $csv_data->code = $data [2];
                $csv_data->save ();
            }
            fclose ( $handle );
        }
        return redirect()->back();
    }
}
