<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\save;

class datFet extends Controller
{
    function saver()
    {
    $data=save::all();
    return view('the_data_base',compact('data'));
    }
    function del($del)
    {
    
        $delt=save::find($del);
        $delt->delete();
        return redirect('fila');
    }
    function edit($ed)
    {
        $edl = save::find($ed);
       
       return view('edit',compact('edl'));
    }
    function update(Request $req)
    {
        $id_no=$req->hide;
        
       $id=save::find($id_no);
       $id->name=$req->name;
      
       $id->number=$req->number;
        
       $id->city=$req->city;
       $id->file=$req->file;
       $id->save();
       return redirect('fila');
       
       
    }
}