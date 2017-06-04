<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Invalid;
use App\Lookup;
use App\Batch;
use App\Http\Requests\InvalidRequest;
use App\Events\EntryRecordCreated;
use App\AUNewsAddress;


class InvalidController extends Controller
{
    private $current_batch;
    
    private $jobnumber;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('batch',['except'=>array('index','find')]);
        $this->middleware('check_application:Australian Newspapers,aunews',['except'=>array('index','find')]);
        $this->middleware('start_entrytime',['only'=>array('invalidadd','invalidedit')]);
        session('batch_details') ? $this->current_batch = Batch::findorfail(session('batch_details')->id) : false;
    }
    
    public function invalidadd(){
        return view('/aunews/invalid/invalidadd');
    }
    
    public function invalidstore(InvalidRequest $request){
        $property = $this->current_batch->au_news_invalids()->save(new Invalid($request->all())); //save address
        event(new EntryRecordCreated($this->current_batch,'I',session('batch_name'),$property->id,session('jobnumber')->id));
        return redirect('/aunews/invalid/add');
    }
    
    public function invalidedit(Invalid $invalid){
        $results = $invalid;
        return view('aunews.invalid.invalidedit', compact('results'));
    }
    
    public function invalidupdate(Request $request, Invalid $invalid){
        $invalid->update($request->all());
        $results = $this->current_batch->au_news_addresses->where('batch_name',session('batch_name'));
        event(new EntryRecordCreated($this->current_batch,'U',session('batch_name'),$invalid->id,session('jobnumber')->id));

        return redirect('/aunews/view');
        
    }
    
    public function delete(Request $request)
    {
        $property = Invalid::findorfail($request->delete_id);
        $property->delete();
        
        $property->entry_logs()->delete();
        event(new EntryRecordCreated($this->current_batch,'D',session('batch_name'),$property->id,session('jobnumber')->id));
        
        flash()->info('Deleted!');
        return redirect()->back();
    }
    
}
