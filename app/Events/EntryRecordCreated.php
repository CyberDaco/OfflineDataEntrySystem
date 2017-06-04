<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Batch;

class EntryRecordCreated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Batch $batch,$action,$batch_name,$record_id,$job_id)
    {
        $this->batch = $batch;
        $this->action = $action;
        $this->batch_name = $batch_name;
        $this->record_id = $record_id;
        $this->jobnumber = $job_id;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
