<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\RecentSaleRequest;
use App\Recent_Sale;
use App\Batch;
use App\Events\EntryRecordCreated;
use App\UserProfile;
use App\AUPostCode;


class RecentSaleController extends Controller
{
    private $current_batch;

    private $folder = 'recent_sales';

    private $relationship = 'recent_sales';

    private $model;

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('batch',['except'=>array('index','find')]);
        $this->middleware('check_application:Recent Sales,recent_sales',['except'=>array('index','find')]);
        $this->middleware('start_entrytime',['only'=>array('entry','modify','verify')]);
        session('batch_details') ? $this->current_batch = Batch::findorfail(session('batch_details')->id) : false;
        $this->model = new Recent_Sale();
    }

    public function index()
    {
        session()->forget('batch_name');
        session()->forget('jobnumber');
        session()->forget('batch_details');
        $results = UserProfile::where('user_id',\Auth::guard('web')->user()->id)->first();
        return view($this->folder.'.batch',compact('results'));
    }

    public function view()
    {
        $this->current_batch = Batch::where('job_name',session('batch_details')->job_name)->get();
        $results = $this->current_batch->load('recent_sales');

        return view($this->folder.'/view',compact('results'));
    }

    public function entry()
    {
        return view($this->folder.'/entry');
    }

    public function create(RecentSaleRequest $request){
        $record = $this->current_batch->recent_sales()->create($request->all());
        event(new EntryRecordCreated($this->current_batch,'E',session('batch_name'),$record->id,session('jobnumber')->id));
        flash()->info($record->address.' added successfully.');
        session()->put('last_record',$record);
        return redirect()->back();
    }

    public function verify()
    {
        if ($record = $this->model->where('batch_name',session('batch_name'))->where('status','E')->first()){
            return view($this->folder.'/verify',compact('record'));
        } else {
            flash()->info('No Record to verify');
            return redirect($this->folder.'/view');
        }
    }

    public function storeverify(Recent_Sale $record, RecentSaleRequest $request)
    {
        $record->update($request->all());
        event(new EntryRecordCreated($this->current_batch,'V',session('batch_name'),$record->id,session('jobnumber')->id));
        flash()->info('Verify Successful!');
        return redirect($this->folder.'/verify');
    }

    public function modify($id)
    {
        $record = $this->model->findorfail($id);
        return view($this->folder.'/modify',compact('record'));
    }

    public function update(RecentSaleRequest $request,Recent_Sale $record) //must be changed
    {
        $record->update($request->all());
        event(new EntryRecordCreated($this->current_batch,'U',session('batch_name'),$record->id,session('jobnumber')->id));
        flash()->info('Update Successful!');
        return redirect($this->folder.'/view');
    }

    public function delete(Request $request)
    {
        $record = $this->model->findorfail($request->delete_id);
        $record->delete();
        $record->user_logs()->delete();
        event(new EntryRecordCreated($this->current_batch,'D',session('batch_name'),$record->id,session('jobnumber')->id));
        flash()->info('Deleted!');
        return redirect()->back();
    }

    //custom function
    public function search_postcode($suburb,$state){
        $post_code = AUPostCode::where('suburb',$suburb)->where('state',$state)->first();
        return \Response::json($post_code);
    }
}
