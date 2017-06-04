<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function publications()
    {
        return $this->belongsToMany('App\Publication');
    }
    
    protected $table = 'states';

    protected $fillable = ['country', 'state', 'code'];
}
