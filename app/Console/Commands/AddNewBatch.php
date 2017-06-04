<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Batch;

class AddNewBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batch:RayWhiteDoubleBay';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add New Ray White Double Bay Batch';

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
        $batch = new Batch();
        $batch->application = 'Recent Sales';
        $batch->job_name = 'RAY WHITE DOUBLE BAY';
        $batch->batch_date = date('d/m/Y');
        $batch->job_status = 'Open';
        $batch->save();
    }
}
