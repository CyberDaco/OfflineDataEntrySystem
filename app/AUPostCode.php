<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AUPostCode extends Model
{
    protected $table = 'au_post_codes';

    protected $fillable = ['state', 'suburb', 'post_code'];
}
