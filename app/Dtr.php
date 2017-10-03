<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dtr extends Model
{
    protected $table = 'dt_recs';

    protected $fillable = ['operators','word_day','in_out'];

}
