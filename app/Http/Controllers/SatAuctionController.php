<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Sat_Auction;
use Carbon\Carbon;

class SatAuctionController extends Controller
{
    public function view(){
        $results = Sat_Auction::all();
        return view('admin.lookup.sat_auction',compact('results'));
    }

    public function import(Request $request){
        $filename = $request->file('csv')->getClientOriginalName();
        $request->file('csv')->move(base_path() . '/storage/upload/sat_auction/',$filename);

        Sat_Auction::truncate();

        if (($handle = fopen ( base_path() . '/storage/upload/sat_auction/'.$filename, 'r' )) !== FALSE) {
            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                $csv_data = new Sat_Auction();
                $csv_data->state = $data [0];
                $csv_data->unit_no = $data [1];
                $csv_data->street_no = $data [2];
                $csv_data->street_name = $data [3];
                $csv_data->street_ext = $data [4];
                $csv_data->street_direction = $data [5];
                $csv_data->suburb = $data [6];
                $csv_data->post_code = $data [7];
                $csv_data->property_type = $data [8];
                $csv_data->sale_type = $data [9];
                $csv_data->sold_price = $data [10];
                $csv_data->contract_date = Carbon::createFromFormat('d/m/Y',$data [11])->toDateString();
                $csv_data->settlement_date = $data [12];
                $csv_data->agency_name = $data [13];
                $csv_data->bedroom = $data [14];
                $csv_data->bathroom = $data [15];
                $csv_data->car = $data [16];
                $csv_data->slug = str_slug($data[0].' '.$data[1].' '.$data[2].' '.$data[3].' '.$data[6],'-');
                $csv_data->save ();
            }
            fclose ( $handle );
        }
        return redirect()->back();
    }

}
