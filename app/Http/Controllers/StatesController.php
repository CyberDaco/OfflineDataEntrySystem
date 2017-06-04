<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\State;

class StatesController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function statesview(){
        $results = State::all();
        return view('/admin/setup/states/view', compact('results'));
    }
    
    public function statesadd(){
        return view('/admin/setup/states/add');
    }
    
    public function statesstore(Request $request){
        $state = State::create($request->all());
        return redirect('admin/setup/states/view');
    }
    
    public function statesedit(State $state){
        
        $results = $state;
        return view('admin.setup.states.edit', compact('results'));
    }
    
    public function statesupdate(Request $request, State $state){
        
        $state->update($request->all());
        return redirect('admin/setup/states/view');
        
    }
    
    public function statesdelete(Request $request){
        $record = State::findorfail($request->delete_id);
        $record->delete();
        
        flash()->info('Deleted!');
        return redirect()->back();
    }
    
}
