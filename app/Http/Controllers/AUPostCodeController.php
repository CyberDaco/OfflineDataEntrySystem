<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\AUPostCodeRequest;

use App\AUPostCode;

class AUPostCodeController extends Controller
{
     public function search($suburb){
         $result = AUPostCode::where('suburb',$suburb)->first();
         return \Response::json($result);
     }
     
     public function aupostcodeview(){
        $results = AUPostCode::paginate(500);
        return view('admin.setup.aupostcode.view', compact('results'));
    }
    
    public function aupostcodeadd(){
        return view('admin.setup.aupostcode.add');
    }
    
    public function aupostcodestore(AUPostCodeRequest $request){
        $aupostcode = AUPostCode::create($request->all());
        return redirect('admin/setup/aupostcode/view');
    }
    
    public function aupostcodeedit(AUPostCode $aupostcode){
        $results = $aupostcode;
        return view('admin.setup.aupostcode.edit', compact('results'));
    }
    
    public function aupostcodeupdate(Request $request, AUPostCode $aupostcode){
        $aupostcode->update($request->all());
        return redirect('admin/setup/aupostcode/view');
    }
    
    public function aupostcodedelete(Request $request){
        $record = AUPostCode::findorfail($request->delete_id);
        $record->delete();
        flash()->info('Deleted!');
        return redirect()->back();
    }
    
    
    
    
}
