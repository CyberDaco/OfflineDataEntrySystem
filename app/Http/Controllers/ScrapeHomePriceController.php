<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ScrapeHomePrice;
use Carbon\Carbon;

class ScrapeHomePriceController extends Controller
{
    public $property = '';

    public function view_home_price(){
        $results = ScrapeHomePrice::all();
        return view('admin.import.home_price',compact('results'));

    }

    public function import(Request $request){
        $filename = $request->file('csv')->getClientOriginalName();
        $request->file('csv')->move(base_path() . '/storage/upload/home_price/',$filename);

        $sale_type = ['S'=>'Sold at Auction','SP'=>'Sold Prior to Auction','SN'=>'Sold At Auction',
                      'VB'=>'Vendor Bid','PN'=>'Sold Prior To Auction','PI'=>'Passed In','SA'=>'Sold After Auction',
                        'W'=>'Withdrawn','SS'=>'Sold at Auction' ];
        $prop_type = ['u'=>'UN','h'=>'HO','t'=>'UN'];


        ScrapeHomePrice::truncate();

        if (($handle = fopen ( base_path() . '/storage/upload/home_price/'.$filename, 'r' )) !== FALSE) {

            while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {


                $csv_data = new ScrapeHomePrice();
                $csv_data->state = 'VIC';

                $csv_data->street_name = str_replace('/',' ',$data[1]);
                $csv_data->suburb = $data [0];
                preg_match('/(h|u|t|dev site)/',$data[2],$match);
                $property_type = trim($match[0]) ? trim($match[0]) : '';
                $csv_data->property_type = $prop_type[$property_type];
                $csv_data->sale_type = $sale_type[strtoupper($data [4])];
                if ($sale_type[strtoupper($data [4])] == 'Passed In' || $sale_type[strtoupper($data [4])] == 'Withdrawn' || $sale_type[strtoupper($data [4])] == 'No Bid'){
                    $csv_data->sold_price = '';
                } else {
                    $csv_data->sold_price = $data [3] == 'N/A' ? 'Undisclosed' : preg_replace('/\D/', '', $data[3]);
                }

                $csv_data->contract_date = Carbon::now();
                $csv_data->settlement_date = null;
                $csv_data->agency_name = $data [5];
                $csv_data->bedroom = preg_replace('/\D/', '', $data[2]);
                $csv_data->slug = str_slug('vic '.$data[1].' '.$data[0],'-');
                $csv_data->save ();
            }
            fclose ( $handle );
        }
        $records = ScrapeHomePrice::all();

        return redirect()->back();
    }


    public function scrape(){

        ScrapeHomePrice::truncate();

        if (($handle = fopen ( base_path() . '/storage/upload/home_price/sydney1.txt', 'r' )) !== FALSE) {
            while ( ($data = fgets ( $handle )) !== FALSE ) {
                $output = [];

                $string = $data;

                /**
                 * Get Sale Type
                 */
                preg_match('/[\t](S|SP|PI|PN|SN|NB|VB|W|SA|SS|)[\t]/', $string, $match) == 1 ? preg_match('/[\t](S|SP|PI|PN|SN|NB|VB|W|SA|SS|)[\t]/', $string, $match): preg_match('/[\t](s|sp|pi|pn|sn|nb|vb|w|sa|ss|)[\t]/', $string, $match);

                $output['sale_type'] = trim($match[1]);

                preg_match('/^(.*?)\d/',$string,$match);
                $output['suburb'] = trim($match[1]);


                print_r($output['suburb']. ' ');
                print_r($output['sale_type']);
                print_r('<br>');
            }

                /** if(strlen($data) > 50 && $this->property !=''){

                    $string = $data;


                    preg_match('/^(.*?)\d/',$string,$match);
                    $output['suburb'] = trim($match[1]);



                    $bedroom = preg_match('/[ ][0-9][ ](br)/',$string,$match);
                    $output['bedroom'] = $bedroom ? trim($match[0]) : '';

                    $property_type = preg_match('/[ ](h|u|t|dev site)[ ]/',$string,$match);
                    $output['property_type'] = $property_type ? trim($match[0]) : 'studio';


                    preg_match('/[ ](S|SP|PI|PN|SN|NB|VB|W|SA|SS|)[ ]/',$string,$match);
                    $output['sale_type'] = trim($match[0]);



                    $price = preg_match('/\$[0-9,]+/',$string,$match);
                    $output['sold_price'] = $price ? $match[0] : 'Undisclosed';

                    $i = strpos($string,' '.$output['sale_type'].' ');
                    $output['agency_name'] = trim(substr($string,$i + strlen($output['sale_type'])+ 2));

                    $start = strlen($output['suburb']) + 1;
                    $end = strpos($string,$output['bedroom'].' '.$output['property_type']) - $start;

                    $output['street_name']=substr($string,$start,$end);


                    $csv = new ScrapeHomePrice();
                    $csv->state = 'vic';
                    $csv->suburb = $output['suburb'];
                    $csv->bedroom = $output['bedroom'] != '' ? str_replace(' br','',$output['bedroom']) : '';
                    $csv->agency_name = $output['agency_name'];
                    $csv->property_type = $output['property_type'];
                    $csv->sale_type = $output['sale_type'];
                    $csv->contract_date = date('Y-m-d');
                    $csv->sold_price = $output['sold_price'] != 'Undisclosed' ? preg_replace("/[^0-9]/","",$output['sold_price']): 'Undisclosed';
                    $csv->street_name = $output['street_name'];

                    $csv->slug = str_slug($csv->state.' '.$csv->street_name.' '.$csv->suburb,'-');
                    $csv->save();
                    $this->property = $data;
                } elseif(strlen($data) > 50 && $this->property =='') {
                    $this->property = $data;
                } else {
                    $this->property .= ' '.$data;
                }


            } **/
            fclose ($handle);
        }


    }
}
