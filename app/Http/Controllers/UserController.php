<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\SystemUsersRequest;

use App\User;

use App\UserProfile;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function sysusersview(){
        $results = User::all();
        return view('admin.setup.sysusers.view', compact('results'));
    }
    
    public function sysusersadd(){
        return view('admin.setup.sysusers.add');
    }
    
    public function sysusersstore(SystemUsersRequest $request){
        $user = User::create($request->all());
        $profile = $user->profile()->create([]);
        return redirect('admin/setup/sysusers/view');
    }
    
    public function sysusersedit(User $user){
        $results = $user;
        return view('admin.setup.sysusers.edit', compact('results'));
    }
    
    public function sysusersupdate(Request $request, User $user){
        $user->update($request->all());
        return redirect('admin/setup/sysusers/view');
    }
    
     public function sysusersdelete(Request $request){
        $record = User::findorfail($request->delete_id);
        $record->delete();
        
        flash()->info('Deleted!');
        return redirect()->back();
    }
    
}
