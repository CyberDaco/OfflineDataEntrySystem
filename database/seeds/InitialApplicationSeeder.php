<?php

use Illuminate\Database\Seeder;

use App\Application;

use App\JobNumber;

use App\Publication;

use App\State;

class InitialApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $application = new Application();
        $application->application_name = 'Interest Auction Results';
        $application->folder_path = '/interest';
        $application->status = 'Active';
        $application->description = '';
        $application->entry_type = 'Single Entry';
        $application->save();
        
        $application = new Application();
        $application->application_name = 'Australian Newspapers';
        $application->folder_path = '/aunews';
        $application->status = 'Active';
        $application->description = '';
        $application->entry_type = 'Single Entry';
        $application->save();

        $application = new Application();
        $application->application_name = 'Recent Sales';
        $application->folder_path = '/recent_sales';
        $application->status = 'Active';
        $application->description = '';
        $application->entry_type = 'Single Entry';
        $application->save();

        $application = new Application();
        $application->application_name = 'REA NZ Keying';
        $application->folder_path = '/reanz';
        $application->status = 'Active';
        $application->description = '';
        $application->entry_type = 'Single Entry';
        $application->save();

        $application = new Application();
        $application->application_name = 'Saturday Auction';
        $application->folder_path = '/sat_auction';
        $application->status = 'Active';
        $application->description = '';
        $application->entry_type = 'Single Entry';
        $application->save();


        $jobnumber = new JobNumber();
        $jobnumber->job_number = 1234;
        $jobnumber->application = 'Interest Auction Results';
        $jobnumber->section = 'S';
        $jobnumber->current_month = '2017-03-01';
        $jobnumber->job_date = '2017-03-01';
        $jobnumber->stats_output = 'SP-Sample';
        $jobnumber->save();
        
        
        $jobnumber = new JobNumber();
        $jobnumber->job_number = 1234;
        $jobnumber->application = 'Australian Newspapers';
        $jobnumber->section = 'S';
        $jobnumber->current_month = '2017-03-01';
        $jobnumber->job_date = '2017-03-01';
        $jobnumber->stats_output = 'SP-Sample';
        $jobnumber->save();

        
        $job = new Publication();
        $job->application = 'Interest Auction Results';
        $job->state = 'VIC';
        $job->pub_name = 'Interest Auction Results';
        $job->source = 'sample';
        $job->issue = 'test';
        $job->status = 'Active';
        $job->site = 'ccc.offline.ph';
        $job->code = 'IAR';
        $job->invalid = 'No';
        $job->save();
        
        $job = new Publication();
        $job->application = 'Australian Newspapers';
        $job->state = 'VIC';
        $job->pub_name = 'Agent Booklet - Woodards Real Estate';
        $job->source = 'sample';
        $job->issue = 'test';
        $job->status = 'Active';
        $job->site = 'ccc.offline.ph';
        $job->code = 'ABW';
        $job->invalid = 'Yes';
        $job->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'Victoria';
        $state->code = 'VIC';
        $state->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'Queensland';
        $state->code = 'QLD';
        $state->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'New South Wales';
        $state->code = 'NSW';
        $state->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'South Australia';
        $state->code = 'SA';
        $state->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'Northern Territory';
        $state->code = 'NT';
        $state->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'Western Australia';
        $state->code = 'WA';
        $state->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'Tasmania';
        $state->code = 'TAS';
        $state->save();

        $state = new State();
        $state->country = 'Australia';
        $state->state = 'Australian Capital Territory';
        $state->code = 'ACT';
        $state->save();

        $state = new State();
        $state->country = 'New Zealand';
        $state->state = 'New Zealand';
        $state->code = 'NZ';
        $state->save();



    }
}
