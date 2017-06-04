<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserProfile;

use App\Http\Requests;

use App\User;


class UserProfileController extends Controller
{
    public function userprofileview(){
        //$results = User::paginate(10)->load('profile');
        $results = User::paginate(3);
        return view('admin.setup.userprofile.view', compact('results'));
    }
    
    public function userprofileedit(UserProfile $userprofile){
        $results = $userprofile;
        return view('admin.setup.userprofile.edit', compact('results'));
    }
    
    public function userprofileupdate(Request $request, UserProfile $userprofile){
        $request->file('user_img')? $request['profile_image'] = $request->file('user_img')->getClientOriginalName() : null;
        $userprofile->update($request->all());
        $request->profile_image ? $request->file('user_img')->move(base_path() . '/public/images/userprofile/', $request->profile_image) : null;
        return redirect('admin/setup/userprofile/view');
    }

    public function showdetails(){
        $results = UserProfile::where('user_id',\Auth::guard('web')->user()->id)->first();
        return view('profile.profile',compact('results'));
    }
    
    public function updatedetails(ProfileRequest $request, UserProfile $userprofile){
        $userprofile->update($request->all());
        
        $imagename = $userprofile->user_id.".".
            $request->file('user_img')->getClientOriginalExtension();
        $request->file('user_img')->move(
        base_path() . '/public/images/userprofile/', $imagename
        );        
        return redirect()->back();
    }
    
    
}
