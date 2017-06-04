<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ScrapeHomePrice;

class ScrapeHomePriceController extends Controller
{
    public $property = '';

    public function scrape(){

        ScrapeHomePrice::truncate();

        if (($handle = fopen ( base_path() . '/storage/upload/home_price/sydney.txt', 'r' )) !== FALSE) {
            while ( ($data = fgets ( $handle )) !== FALSE ) {
                $output = [];
                if(strlen($data) > 50 && $this->property !=''){

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
                    $csv->state = 'nz';
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


            }
            fclose ($handle);
        }
    }
}
