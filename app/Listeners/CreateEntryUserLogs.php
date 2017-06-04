<?php

namespace App\Listeners;

use App\Events\EntryRecordCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\UserLog;

class CreateEntryUserLogs
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
     * @param  EntryRecordCreated  $event
     * @return void
     */
    public function handle(EntryRecordCreated $event)
    {
        $event->batch->entry_logs()->create([
            'batch_name'=>$event->batch_name,
            'record_id'=> $event->record_id,
            'user_id'=>\Auth::guard("web")->user()->operator_id,
            'jobnumber_id' => $event->jobnumber,
            'start'=>session('start'),
            'action'=> $event->action
        ]);
        
        
    }
}
