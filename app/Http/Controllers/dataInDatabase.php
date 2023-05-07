<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\save;

class dataInDatabase extends Controller
{
    function storeid(Request $req)
    {
     $saving=new save;
     $file=$req->file('file')->store('img');
     $fili=substr($file,4);
     $saving->name=$req->name;
     $saving->number=$req->number;
     $saving->city=$req->place;
     $saving->file= $fili;

     $saving->save();

     return "your data has been saved";
        
        
    }
}