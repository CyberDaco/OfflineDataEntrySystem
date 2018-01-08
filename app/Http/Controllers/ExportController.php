<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Batch;
use App\Publication;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FindRequest;
use Excel;
use PDO;
use App\Events\ExportJob;


class ExportController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function export_interest(Batch $batch, $file_type){
        DB::connection()->setFetchMode(PDO::FETCH_NUM);
        $data = DB::table('recent_sales')
            ->select('unit_no','street_no','street_name','street_ext','street_direction','suburb','post_code',
                'property_type','sale_type','sold_price',DB::raw('DATE_FORMAT(contract_date,"%d/%m/%Y") as contract_date'),
                'settlement_date','agency_name','bedroom','bathroom')
            ->where('batch_id',$batch->id)
            ->get();
        DB::connection()->setFetchMode(PDO::FETCH_CLASS);

        $filename = $batch->export_date_filename.'_nz_interest';

        Excel::create($filename, function($excel) use($data) {
            $excel->sheet('Sheet1', function($sheet) use($data) {
                $sheet->fromArray($data,"'",'A1',false,false);
            });
        })->export($file_type);
    }

    public function export_recent_sales(Batch $batch, $file_type){
        DB::connection()->setFetchMode(PDO::FETCH_NUM);
        $data = DB::table('recent_sales')
            ->select('state','unit_no','street_no','street_name','street_ext','street_direction','suburb','post_code',
                'property_type','sale_type','sold_price',DB::raw('DATE_FORMAT(contract_date,"%d/%m/%Y") as contract_date'),
                'settlement_date','agency_name','bedroom','bathroom','car')
            ->where('batch_id',$batch->id)
            ->get();
        DB::connection()->setFetchMode(PDO::FETCH_CLASS);

        $state = Publication::where('pub_name',$batch->job_name)->first();


        //if($batch->job_name == 'RAY WHITE DOUBLE BAY' ){
        //   $state = 'nsw';
        //}elseif($batch->job_name == 'OZ HOUSE PRICE' ){
        //$state = 'nsw';
        //}elseif($batch->job_name == 'Marshall White Brighton'){
        //    $state = 'vic';
        //}



        //Ray White double Bay
        //Marshall White Brighton
        //Coutts Real Estate
        //Ray White Centenary
        //PRD Agnes Water
        //Peter Fitzgerald
        //Raine & Horne Macleay Island


        $filename = $batch->export_date_filename.'_'.strtolower($state->state).'_ccc';

        Excel::create($filename, function($excel) use($data) {
            $excel->sheet('Sheet1', function($sheet) use($data) {
                $sheet->fromArray($data,"'",'A1',false,false);
            });
        })->export($file_type);
    }

    public function export_sat_auction(Batch $batch,$file_type){
        DB::connection()->setFetchMode(PDO::FETCH_NUM);
        $data = DB::table('recent_sales')
            ->select('state','unit_no','street_no','street_name','street_ext','street_direction','suburb','post_code',
                'property_type','sale_type','sold_price',DB::raw('DATE_FORMAT(contract_date,"%d/%m/%Y") as contract_date'),
                'settlement_date','agency_name','bedroom','bathroom','car')
            ->where('batch_id',$batch->id)
            ->orderBy('state', 'asc')
            ->orderBy('suburb', 'asc')
            ->orderBy('id','asc')
            ->get();
        DB::connection()->setFetchMode(PDO::FETCH_CLASS);

        if ($batch->job_name == 'Real Estate View'){
            $file_extension = '_vic_ccc';
        } else {
            $file_extension = '_nsw_ccc';
        }

        $filename = $batch->export_date_filename.$file_extension;

        event(new ExportJob($batch,$data));

        Excel::create($filename, function($excel) use($data) {
            $excel->sheet('Sheet1', function($sheet) use($data) {
                $sheet->fromArray($data,"'",'A1',false,false);
            });
        })->export($file_type);


    }

    public function export_reanz(Batch $batch,$file_type){
        DB::connection()->setFetchMode(PDO::FETCH_NUM);
        $data = DB::table('reanzs')
            ->select('listing_id','property_id','scrape_date',DB::raw('DATE_FORMAT(list_date,"%d/%m/%Y") as list_date'),'url','site_area','property_address','unit_no','st_no_pref',
                'street_no','st_no_suffix','street_name','street_type','quadrant','suburb','city','price_guide','bedrooms',
                'bathrooms','car_spaces','sale_method','auction_day',DB::raw('DATE_FORMAT(auction_date,"%d/%m/%Y") as auction_date'),'auction_time','land_size',
                'floor_size','agency_name','agency_id','first_agent_name','first_agent_id','first_agent_mobile',
                'first_agent_phone','first_agent_direct','second_agent_name','second_agent_id','second_agent_mobile','second_agent_phone',
                'second_agent_direct','photo_count')
            ->where('batch_id',$batch->id)
            ->get();
        DB::connection()->setFetchMode(PDO::FETCH_CLASS);

        $filename = 'reanz_'.$batch->export_date_filename;

        event(new ExportJob($batch,$data));

        Excel::create($filename, function($excel) use($data) {
            $excel->sheet('Sheet1', function($sheet) use($data) {
                $sheet->fromArray($data,null,'A2',false,false);

                $sheet->row(1,array('ListingId','PropertyId','ScrapeDate','ListDate','Url','SiteArea',
                    'PropertyAddress','UnitNumber','StreetNumberPrefix','StreetNumber','StreetNumberSuffix','StreetName','StreetType','Quadrant',
                    'Suburb','City','PriceGuide','Bedrooms','Bathrooms','CarSpaces','SaleMethod','AuctionDay',
                    'AuctionDate','AuctionTime','LandSize','FloorSize','AgencyName','AgencyID','FirstAgentName',
                    'FirstAgentID','FirstAgentMobile','FirstAgentPhone','FirstAgentDirectDial','SecondAgentName',
                    'SecondAgentID','SecondAgentMobile','SecondAgentPhone','SecondAgentDirectDial','PhotoCount'
                ));

                $sheet->setColumnFormat(array(
                    'B' => 'General',
                    'R' => '0',
                    'S' => '0',
                    'T' => '0',
                    'Q' => 'General'
                ));
            });
        })->export($file_type);
    }

    public function show_aunews(){
        return view('admin.export.aunews');
    }
    
    public function get_aunews(FindRequest $request){
        $job_date = Carbon::createFromFormat('d/m/Y', $request->batch_date);
        $batch = Batch::where('job_name',$request->job_name)->where('batch_date',$job_date->format('Y-m-d'))->first();
        if ($batch){
            $invalids = $batch->au_news_invalids()
                ->select('batch_id','batch_name', DB::raw('COUNT(batch_name) as records'))
                ->groupBy('batch_name')->orderBy('batch_name','desc')->get();    
                
            $results = $batch->au_news_addresses()
                ->select('batch_id','batch_name', DB::raw("sum(IF(status='E',1,0)) as entry"),DB::raw("sum(IF(status='V',1,0)) as verify"))
                ->groupBy('batch_name')->orderBy('batch_name','desc')->get();
             return view('admin.export.aunews',compact('results','batch','invalids'));
        } else {
            return view('admin.export.aunews');
        }
    }
    
    public function export_aunews(Request $request){
        $batch = Batch::findorfail($request->id);   
        $sequence = $request->sequence - 1;
        
        if( $batch){
            //$export = $batch->au_news_addresses->all();    //n + 1
            
            $export = $batch->au_news_addresses->load('property_detail','property_agents');  //eager loading
            
            $file = fopen('aunews.txt','w+');
            
            //Write for the Header
            fwrite($file,"P/C1\tP/C2\t");
            for ($count = 3; $count <= 111; $count++)
            { 
                fwrite($file,"P".$count."\t");
            } 
	        fwrite($file,"P".$count."\r\n");
            
            foreach($export as $key => $row)
            {
                $sequence++;
                fwrite($file,"P\t");
                fwrite($file,$sequence."\t");
                fwrite($file,$row->state."\t");
                fwrite($file,strtoupper($batch->job_name)."\t");
                fwrite($file,$batch->batch_date."\t");
                fwrite($file,$row->unit_no."\t");
                fwrite($file,$row->street_no."\t");
                fwrite($file,$row->street_no_suffix."\t");
                fwrite($file,$row->street_name."\t");
                fwrite($file,trim($row->street_extension." ".$row->street_direction)."\t");
                fwrite($file,$row->suburb."\t");
                fwrite($file,$row->state."\t");
                fwrite($file,$row->property_type."\t");
                fwrite($file,$row->property_detail->listing_type."\t");
                fwrite($file,$row->property_detail->price_from."\t");
                fwrite($file,$row->property_detail->price_to."\t");
                fwrite($file,$row->property_detail->price_description."\t");
                fwrite($file,$row->property_detail->rental_period."\t");
                fwrite($file,$row->property_detail->auction_date."\t");
                fwrite($file,$row->property_detail->auction_time."\t");
                fwrite($file,$row->property_detail->action_venue."\t");
                fwrite($file,$row->property_detail->water_frontage."\t");
                fwrite($file,$row->property_detail->scenic_view."\t");
                fwrite($file,$row->property_detail->air_conditioned."\t");
                fwrite($file,$row->property_detail->heritage_other."\t");
                fwrite($file,$row->property_detail->lift_installed."\t");
                fwrite($file,$row->property_detail->access_security."\t");
                fwrite($file,$row->property_detail->close_to_public."\t");
                fwrite($file,$row->property_detail->vendor_trade."\t");
                fwrite($file,$row->property_detail->permanent_water."\t");
                fwrite($file,$row->property_detail->electricity."\t");
                fwrite($file,$row->property_detail->river_frontage."\t");
                fwrite($file,$row->property_detail->coast_frontage."\t");
                fwrite($file,$row->property_detail->canal_frontage."\t");
                fwrite($file,$row->property_detail->lake_frontage."\t");
                fwrite($file,$row->property_detail->sealed_roads."\t");
                fwrite($file,$row->property_detail->open_plan."\t");
                fwrite($file,$row->property_detail->fireplace."\t");
                fwrite($file,$row->property_detail->polished_floors."\t");
                fwrite($file,$row->property_detail->swimming_pool."\t");
                fwrite($file,$row->property_detail->renovated."\t");
                fwrite($file,$row->property_detail->double_storey."\t");
                fwrite($file,$row->property_detail->ducted_heating."\t");
                fwrite($file,$row->property_detail->granny_flat."\t");
                fwrite($file,$row->property_detail->selling_off."\t");
                fwrite($file,$row->property_detail->boat_ramp."\t");
                fwrite($file,$row->property_detail->ducted_vacuum."\t");
                fwrite($file,$row->property_detail->town_water."\t");
                fwrite($file,$row->property_detail->town_sewerage."\t");
                fwrite($file,$row->property_detail->curb_channel."\t");
                fwrite($file,$row->property_detail->town_sewerage."\t");
                fwrite($file,$row->property_detail->all_weather."\t");
                fwrite($file,$row->property_detail->flooding."\t");
                fwrite($file,$row->property_detail->phone_service."\t");
                fwrite($file,$row->property_detail->subdivision."\t");
                fwrite($file,$row->property_detail->trees."\t");
                fwrite($file,"\t\t\t\t\t\t\t\t\t\t\t\t");
                fwrite($file,$row->property_detail->bedrooms."\t");
                fwrite($file,$row->property_detail->floor_area."\t");
                fwrite($file,$row->property_detail->land_area."\t");
                $row->property_detail->land_area != null ? fwrite($file,$row->property_detail->land_area_metric."\t") : fwrite($file,"\t");
                fwrite($file,$row->property_detail->ensuites."\t");
                fwrite($file,$row->property_detail->toilets."\t");
                fwrite($file,$row->property_detail->dining_rooms."\t");
                fwrite($file,$row->property_detail->lounge_dining."\t");
                fwrite($file,$row->property_detail->other_rooms."\t");
                fwrite($file,$row->property_detail->lockup_garages."\t");
                fwrite($file,$row->property_detail->year_built."\t");
                fwrite($file,$row->property_detail->floor_level."\t");
                fwrite($file,$row->property_detail->floor_level_inside."\t");
                fwrite($file,$row->property_detail->bathrooms."\t");
                fwrite($file,$row->property_detail->lounge_rooms."\t");
                fwrite($file,$row->property_detail->study_rooms."\t");
                fwrite($file,$row->property_detail->tennis_court."\t");
                fwrite($file,$row->property_detail->family_rumpus."\t");
                fwrite($file,$row->property_detail->car_spaces."\t");
                fwrite($file,$row->property_detail->year_refurbished."\t");
                fwrite($file,$row->property_detail->total_floors."\t");
                fwrite($file,"\t\t\t\t\t\t\t");
                fwrite($file,$row->property_detail->construction_type."\t");
                fwrite($file,$row->property_detail->roof_material."\t");
                fwrite($file,$row->property_detail->scenic_view_type."\t");
                fwrite($file,"\t\t\t");
                fwrite($file,$row->property_detail->ad_size."\t");
                fwrite($file,$row->property_detail->ad_photo_type."\t");
                fwrite($file,$row->property_detail->ad_photo_count."\t");
                fwrite($file,$row->property_detail->ad_section."\t");
                fwrite($file,$row->property_detail->ad_exclusive."\t");
                fwrite($file,$row->property_detail->additional_property."\t");
                fwrite($file,$row->property_detail->created_at->format('d/m/Y')."\t");
                fwrite($file,"\t\t\t\r\n");
                foreach($row->property_agents as $agent){
                    fwrite($file,"C\t");
                    fwrite($file,$sequence."\t");
                    fwrite($file,$agent->agency_name."\t");
                    fwrite($file,$agent->agent_firstname."\t");
                    fwrite($file,$agent->agent_lastname."\t");
                    fwrite($file,$agent->agent_contact."\t");
                    fwrite($file,"\r\n");
                }
            }
            
            //close the file
            fclose($file);
        
            $headers = array(
                'Content-Type' => 'text/csv',
                );
            
            $filename = "CCC_".date('Ymd')."_".date('His').".txt";    
            return response()->download('aunews.txt',$filename, $headers);
        } else {
            flash()->info('Error Exporting File');
            return redirect()->back();
        }    
    }
    
    public function export_invalid(Batch $batch){
        DB::connection()->setFetchMode(PDO::FETCH_NUM);
        $data = DB::table('batches')
                ->join('invalids', 'invalids.batch_id', '=', 'batches.id')
                ->select('state','job_name',DB::raw('DATE_FORMAT(batch_date,"%d/%m/%Y") as batch_date'),'unit_no','street_no',
                    'street_no_suffix','street_name',DB::raw("TRIM(CONCAT(street_extension,' ',street_direction)) as street_extension"),'suburb',
                    'multiple_properties','property_type','sale_rent','price_from',
                    'price_to',DB::raw("DATE_FORMAT(auction_date,'%d/%m/%Y') as auction_date"),DB::raw("DATE_FORMAT(auction_time,'%h:%i %p') as auction_time"),'auction_venue',
                    'price_description','bedrooms','bathrooms','lockup_garages',
                    'swimming_pool','air_conditioned','close_to_public','ad_size',
                    'ad_photo_type','ad_photo_count','ad_section','ad_exclusive',
                    'agency_name','agent_firstname','agent_lastname','agent_contact')
                ->where('batches.id',$batch->id)    
                ->get();
        DB::connection()->setFetchMode(PDO::FETCH_CLASS);

        $filename = $batch->job_name.' '.$batch->batch_date;
        
        Excel::create($filename, function($excel) use($data) {
            $excel->sheet('Sheetname', function($sheet) use($data) {
                $sheet->setStyle(array(
                    'font' => array(
                        'name'      =>  'Calibri',
                        'size'      =>  11,
                    )
                ));
                
                $sheet->row(1,array('STATE','PUBLICATION NAME','PUBLICATION DATE',
                    'UNIT #','STREET #','STREET # SUFFIX','STREET NAME','STREET EXT.',
                    'SUBURB','MULTIPLE PROPERTIES','PROPERTY TYPE','SALE TYPE',
                    'PRICE FROM','PRICE TO','AUCTION/TENDER DATE','AUCTION/TENDER TIME',
                    'AUCTION LOCATION','PRICE DESCRIPTION','BEDROOMS','BATHROOMS',
                    'CAR SPACES','SWIMMING POOL','AIR CONDITIONING','CLOSE TO PUBLIC TRANSPORT',
                    'AD SIZE','PHOTO FEATURES','PHOTO COUNT','SECTION','EXCLUSIVE AGENCY',
                    'AGENCY NAME','AGENT FIRST NAME','AGENT SURNAME','AGENT CONTACT PHONE'
                    ));
                
                $sheet->row(1, function($row) {
                    $row->setBackground('#000000');
                    $row->setFontColor('#ffffff');
                    $row->setFontWeight('bold');
                }); 
                
                $sheet->fromArray($data,null,'A2',false,false);
            });
        
        })->export('xls');
    }

    public function zipFileDownload(){
    
        $public_dir=public_path().'/uploads';
        $zipFileName = Carbon\Carbon::now().'.zip';
        $zip = new ZipArchive;
        if ($zip->open($public_dir . '/' . $zipFileName, ZipArchive::CREATE) === TRUE) {    
            $zip->addFile('file_path','file_name');        
             $zip->close();
        }
         $headers = array(
                'Content-Type' => 'application/octet-stream',
            );
        $filetopath=$public_dir.'/'.$zipFileName;
        if(file_exists($filetopath)){
            return response()->download($filetopath,$zipFileName,$headers);
        }
        return ['status'=>'file does not exist'];
        
        foreach($files as $file) {
         $zip->addFile($file->file_path,$file->file_name);
        }
    }
    
    
    
}
