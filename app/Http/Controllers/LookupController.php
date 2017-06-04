<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\LookupRequest;

use App\Lookup;


class LookupController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function lookupview(){
        
        $results = Lookup::all();
        return view('admin.setup.lookup.view', compact('results'));
    }
    
    public function lookupadd(){

        return view('admin.setup.lookup.add');
        
    }
    
    public function lookupstore(LookupRequest $request){
                
        $lookup = Lookup::create($request->all());
        return redirect('admin/setup/lookup/view');
    }
    
    public function lookupedit(Lookup $lookup){
        
        $results = $lookup;
        return view('admin.setup.lookup.edit', compact('results'));
    }
    
    public function lookupupdate(Request $request, Lookup $lookup){
        
        $lookup->update($request->all());
        return redirect('admin/setup/lookup/view');
        
    }
    
    public function lookupdelete(Request $request){
        $record = Lookup::findorfail($request->delete_id);
        $record->delete();
        
        flash()->info('Deleted!');
        return redirect()->back();
        
    }
    
}
