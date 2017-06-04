<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AUNews extends Controller
{
    public function aupostcodeupdate(Request $request, AUPostCode $aupostcode){
        $aupostcode->update($request->all());
        return redirect('admin/setup/aupostcode/view');
    }
    
    public function invalidview(){
        return view('aunews/invalid');
    }
}
