<?php

namespace App\Listeners;

use App\Events\ExportJob;
use Carbon\Carbon;
use App\JobNumber;
use Illuminate\Support\Facades\DB;
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

        $results = collect(DB::table('entry_logs')
            ->select(
                DB::raw('SEC_TO_TIME(SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start))) as hours'),
                DB::raw('SUM(UNIX_TIMESTAMP(entry_logs.end) - UNIX_TIMESTAMP(entry_logs.start)) as seconds'))
            ->where('batch_id',$event->batch->id)
            ->where('action','E')
            ->groupBy('batch_id')
            ->get());

        $event->batch->update(['job_status' => 'Closed',
            'hours'=>sprintf('%02d:%02d:%02d', ($results->sum('seconds')/3600),($results->sum('seconds')/60%60), $results->sum('seconds')%60),
            'export_date'=>Carbon::now(),
            'exported_at'=>Carbon::now(),
            'records'=>$records->count(),
            'jobnumber'=>$job_number->job_number,
            'export_user_id'=> $event->user_id
            ]);

    }
}
