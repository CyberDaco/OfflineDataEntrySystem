<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Publication;
use App\Batch;
use Exception;

class OpenBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batch:open {application}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add New Batch';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $application = str_replace('_',' ',$this->argument('application'));
        $jobs = Publication::where('application',$application)->get(['pub_name']);

        try
        {
            foreach($jobs as $job){
                $batch = new Batch();
                $batch->application = $application;
                $batch->job_name = $job->pub_name;
                $batch->batch_date = date('d/m/Y');
                $batch->job_status = 'Open';
                $batch->save();
            }
        }

        catch(Exception $e)
        {
            $this->error($e->getMessage());
        }








    }
}
