<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PublicationRequest;

use App\Publication;

class PublicationController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }


    public function pubview(){
        $results = Publication::all();

        //dd($results[2]->state_code_only);

        return view('admin.setup.publication.view',compact('results'));
    }
    
    public function pubadd(){
        
        return view('admin.setup.publication.add');
    }
    
    public function pubstore(PublicationRequest $request){
        $publication = Publication::create($request->all());
        $publication->states()->attach($request->state_list);
        return redirect('/admin/setup/publication/view');
    }
    
    public function pubedit(Publication $publication){
        $results = $publication;
        return view('admin.setup.publication.edit',compact('results'));
    }
    
    public function pubupdate(Request $request,Publication $publication){
        $publication->update($request->all());
        $publication->states()->sync($request->state_list);
        return redirect('/admin/setup/publication/view');
    }
    
    public function pubdelete(Request $request){
        $record = Publication::findorfail($request->delete_id);
        $record->delete();
        
        flash()->info('Deleted!');
        return redirect()->back();
    }
}
