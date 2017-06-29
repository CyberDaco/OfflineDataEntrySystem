<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Batch;
use Carbon\Carbon;

class ClosedBatch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batch:close';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $batches = Batch::where('job_status','Open')
                    ->where('created_at','<',Carbon::now()->subDay(30))
                    ->update(['job_status'=>'Closed']);
    }
}
