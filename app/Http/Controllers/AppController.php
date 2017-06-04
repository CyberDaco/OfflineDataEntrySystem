<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Application;

use App\UserProfile;

use App\User;

use App\Http\Requests\ProfileRequest;

use App\Batch;



class AppController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index(){
        session()->forget('batch_name');
        session()->forget('jobnumber');
        session()->forget('batch_details');
        $applications = Application::where('status','Active')->get();
        $results = UserProfile::where('user_id',\Auth::guard('web')->user()->id)->first();
        return view('dataentry',compact('applications','results'));
    }

    public function profile(){
        $applications = Application::where('status','Active')->get();
        $results = UserProfile::where('user_id',\Auth::guard('web')->user()->id)->first();
        return view('profile',compact('applications','results'));
    }

    public function userprofileupdate(ProfileRequest $request, UserProfile $userprofile){
        if($request->password != "")
        {
            $user = User::where('operator_id',$request->operator_id)->first();
            $user->update($request->only(['password']));
        }

        $request->file('user_img')? $request['profile_image'] = $request->file('user_img')->getClientOriginalName() : null;
        $userprofile->update($request->except('operator_id'));
        $request->profile_image ? $request->file('user_img')->move(base_path() . '/public/images/userprofile/', $request->profile_image) : null;
        return redirect('/profile');
    }
}
