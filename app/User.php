<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Support\Facades\Cache;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email','operator_id', 'username', 'password', 'firstname', 'lastname', 'access_level'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
    
    
    public function profile(){
        return $this->hasOne('App\UserProfile','user_id');
    }
    
    public function leave(){
        return $this->hasOne('App\Leave','user_id');
    }
    
    public function leaves(){
        return $this->hasMany('App\UserLeaves','user_id');
    }
    
    public function eeleave(){
        return $this->hasMany('App\EeLeave','user_id');
    }

    public function entry_logs(){
        return $this->hasMany('App\UserLog','user_id','operator_id')
                    ->selectRaw('count(user_id) as count_user, jobnumber_id,user_id,sum(entry_time) as seconds')
                    ->where('action','E')
                    ->groupBy('user_id','jobnumber_id')
                    ->orderBy('jobnumber_id');
    }


    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);

    }



    
    public function setPasswordAttribute($value){
        $value != '' ? $this->attributes['password'] = bcrypt($value)    : $this->attributes['password'] = null;
    }
}
