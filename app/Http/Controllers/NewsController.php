<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Lookup;
use App\Http\Requests\BatchFindRequest;
use Carbon\Carbon;
use App\Batch;
use App\AUNewsAddress;
use App\AUNewsPropertyDetail;
use App\AUNewsAgency;
use App\Events\EntryRecordCreated;
use App\Invalid;
use App\Http\Requests\HouseRequest;
use App\Http\Requests\AddressRequest;

class NewsController extends Controller
{
    private $current_batch;
    
    private $jobnumber;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('batch',['except'=>array('index','find')]);
        $this->middleware('check_application:Australian Newspapers,aunews',['except'=>array('index','find')]);
        $this->middleware('start_entrytime',['only'=>array('entry','modify','verify')]);
        session('batch_details') ? $this->current_batch = Batch::findorfail(session('batch_details')->id) : false;
    }

    public function index()
    {
        return view('aunews.batch');
    }

    public function view() //eager loading
    {
        $results = $this->current_batch->load(array('au_news_addresses'=> function($query){
            $query->where('batch_name',session('batch_name'));
        },'au_news_invalids'=>function($query){
            $query->where('batch_name',session('batch_name'));
        }));
        return view('aunews.view',compact('results'));
    }
    
    public function entry(Request $request){
        return view('aunews.address');
    }

    public function showproperty(Request $request){
        return view('aunews.propdetails')->with('prop_address',$request->all());
    }
    
    public function storeproperty(AddressRequest $request){
        $property = $this->current_batch->au_news_addresses()->save(new AUNewsAddress($request->all())); //save address
        $property->property_detail()->save(new AUNewsPropertyDetail($request->all())); //save attributes
        $property->property_agents()->saveMany($this->transform_contacts($request->only('agent_contacts','agency_names','agent_firstnames','agent_lastnames')));  //save agency details
        session()->put('page_no',$request->page_no);
        session()->put('state',$request->state);
        event(new EntryRecordCreated($this->current_batch,'E',session('batch_name'),$property->id,session('jobnumber')->id));
        return view('aunews.address');
        
    }
    
    public function modify(AUNewsAddress $record)
    {   
        return view('aunews.modify',compact('record'));
    }
    
    public function modifypropertydetails(AUNewsAddress $id,Request $request)
    {   
        $record = $id->property_detail;
        $agents = $id->property_agents;
        $prop_address = $request->all();
        return view('aunews.modify_details',compact('record','prop_address','agents'));
    }
    
    public function update(Request $request,AUNewsAddress $aunews_address)
    {
        $aunews_address->update($request->all());
        $aunews_address->property_detail->update($request->all());
        $aunews_address->property_agents()->delete(); 
        $aunews_address->property_agents()->saveMany($this->transform_contacts($request->only('agent_contacts','agency_names','agent_firstnames','agent_lastnames'))); 
        event(new EntryRecordCreated($this->current_batch,'U',session('batch_name'),$aunews_address->id,session('jobnumber')->id));
        
        flash()->info('Update Successful!');
        return redirect('/aunews/view');
    }
    
    public function delete(Request $request)
    {
        $property = AUNewsAddress::findorfail($request->delete_id);
        $property->delete();
        
        $property->entry_logs()->delete(); //need to check
        event(new EntryRecordCreated($this->current_batch,'D',session('batch_name'),$property->id,session('jobnumber')->id));
        
        flash()->info('Deleted!');
        return redirect()->back();
    }
    
    public function findproperty(Request $request){
        return $request->all();
    }
    
    public function verify()
    {
        if ($record = AUNewsAddress::where('batch_name',session('batch_name'))->where('status','E')->first()){
            return view('aunews.verify',compact('record')); 
        } else {
            flash()->info('No Record to verify');
            return redirect('/aunews/view');
        }
    }
    
    public function verifypropertydetails(AUNewsAddress $id,Request $request)
    {   
        $record = $id->property_detail;
        $agents = $id->property_agents;
        $prop_address = $request->all();
        return view('aunews.verify_details',compact('record','prop_address','agents'));
    }
    
    public function verify_update(Request $request,AUNewsAddress $aunews_address)
    {
        $aunews_address->update($request->all());
        $aunews_address->property_detail->update($request->all());
        $aunews_address->property_agents()->delete(); 
        $aunews_address->property_agents()->saveMany($this->transform_contacts($request->only('agent_contacts','agency_names','agent_firstnames','agent_lastnames'))); 
        
        event(new EntryRecordCreated($this->current_batch,'V',session('batch_name'),$aunews_address->id,session('jobnumber')->id));
        
        flash()->info('Verify Successful!');
        return redirect('/aunews/verify');
    }
    
    private function transform_contacts($values){
        $contacts = [];
        $agent_contacts = $values['agent_contacts'];
        $agency_names = $values['agency_names'];
        $agent_firstnames = $values['agent_firstnames'];
        $agent_lastnames = $values['agent_lastnames'];
        
        foreach($agent_contacts as $i => $agent_contact){
            if($agent_contact != '' || $agency_names[$i] != ''){
                $contacts[] = new AUNewsAgency([
                    'agent_contact' => $agent_contact,
                    'agency_name' => $agency_names[$i],
                    'agent_firstname' => $agent_firstnames[$i],
                    'agent_lastname' => $agent_lastnames[$i]
                ]);
            }
        }
        return $contacts;
    }

}
