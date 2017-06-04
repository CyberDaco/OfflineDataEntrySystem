<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';
    
    protected $fillable = ['operator_id', 'username', 'firstname', 'lastname', 'contact_no', 'address','profile_image','department','position','shift_schedule'];
    
}
