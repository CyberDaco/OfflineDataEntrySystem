<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lookup extends Model
{
    protected $table = 'lookups';
    
    protected $fillable = ['filter', 'name', 'code'];
}
