<?php

namespace App\Listeners;

use App\Events\ExportJob;
use Carbon\Carbon;
use App\JobNumber;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RecordJobExport
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ExportJob  $event
     * @return void
     */
    public function handle(ExportJob $event)
    {
        $records = collect($event->data);

        $job_number = JobNumber::where('application',$event->batch->job_name)
            ->where('current_month',Carbon::now()->startOfMonth())
            ->where('job_date', Carbon::now()->startOfMonth())
            ->first();

        $event->batch->update(['job_status' => 'Closed',
            'export_date'=>Carbon::now(),
            'records'=>$records->count(),
            'jobnumber'=>$job_number->job_number
            ]);

    }
}
