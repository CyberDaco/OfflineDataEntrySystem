<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileEntry extends Model
{
    protected $table = 'fileentries';

    protected $fillable = ['batch_id', 'filename', 'mime', 'original_filename',
        'status', 'operator_id', 'application', 'job_name','size'];
}
