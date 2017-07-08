<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Batch;

use Carbon\Carbon;

use App\Http\Requests\ImportRequest;

use App\Reanz;

use App\FileEntry;
use App\JobNumber;

class ImportController extends Controller
{
    public function import_reanz(ImportRequest $request){
        $job_date = Carbon::createFromFormat('d/m/Y',$request->job_date);
        $batch = Batch::where('job_name',$request->job_name)->where('batch_date',$job_date->format('Y-m-d'))->first();

        if ($batch){
            $file = $request->file('csv');
            $filename = $file->getClientOriginalName();
            $request->file('csv')->move(base_path() . '/storage/app/reanz/',$filename);

            //Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
            $entry = new Fileentry();
            $entry->batch_id = $batch->id;
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename().'.'.$file->getClientOriginalExtension();
            $entry->status = "Pending";
            $entry->application = $batch->application;
            $entry->job_name = $batch->job_name;
            $entry->operator_id = \Auth::guard('admin')->user()->id;
            $entry->save();

             if (($handle = fopen ( base_path() . '/storage/app/reanz/'.$filename, 'r' )) !== FALSE) {

                 //Grab the headers before doing insertion
                 $headers = fgetcsv($handle, 1000, ",");

                 while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {
                    $csv_data = new Reanz();
                    $csv_data->batch_name = 'IMPORTED';
                    $csv_data->state = '';
                    $csv_data->listing_id = $data[0];
                    $csv_data->property_id = $data[1];
                    $csv_data->list_date = $data[3];
                    $csv_data->site_area = $data[5];
                    $csv_data->property_address = $data[6];
                    $csv_data->price_guide = $data[16];
                    $csv_data->bedrooms = $data[17];
                    $csv_data->bathrooms = $data[18];
                    $csv_data->car_spaces = $data[19];
                    $csv_data->auction_date = $data[22];
                    $csv_data->land_size = $data[24];
                    $csv_data->floor_size = $data[25];
                    $csv_data->agency_name = $data[26];
                    $csv_data->first_agent_name = $data[28];
                    $csv_data->first_agent_mobile = $data[30];
                    $csv_data->second_agent_name = $data[33];
                    $csv_data->second_agent_mobile = $data[35];
                    $csv_data->status = 'E';
                    $csv_data->batch_id = $batch->id;
                    $csv_data->save ();
                }
                fclose ( $handle );

                $entry->update(['status'=>'Uploaded']);

                $records = $batch->reanzs()->count();

                 $job_number = JobNumber::where('application',$batch->job_name)
                     ->where('current_month',Carbon::now()->startOfMonth())
                     ->where('job_date', Carbon::now()->startOfMonth())
                     ->first();

                $batch->update(['job_status' => 'Closed',
                     'export_date'=>Carbon::now(),
                     'exported_at'=>Carbon::now(),
                     'records'=>$records,
                     'jobnumber'=>$job_number->job_number,
                     'export_user_id'=> \Auth::guard('admin')->user()->id
                 ]);





                return redirect()->back();
             } else {
                 flash()->info('File Not Found');
                 return redirect()->back()->withInput()->withErrors('File Not Found');
             }

        } else {
            flash()->info('Batch Not Found!');
            return redirect()->back()->withInput()->withErrors('Batch Not Found');
        }

    }
}
