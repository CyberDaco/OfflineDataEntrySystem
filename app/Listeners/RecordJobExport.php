<?php

namespace App\Listeners;

use App\Events\ExportJob;
use Carbon\Carbon;
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
        $event->batch->update(['job_status' => 'Closed','export_date'=>Carbon::now(),'records'=>$records->count()]);

    }
}
