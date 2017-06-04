<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatAuctionStExtension extends Model
{
    protected $table = 'sat_auction_st_extensions';

    protected $fillable = ['name', 'code'];

}
