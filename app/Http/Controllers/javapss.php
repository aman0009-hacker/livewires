<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class javapss extends Controller
{
    
function arr()
{
    $arr=[
            'name' => "aman", "class" => 5, "school" => "swamiRam"
        
    ];
    
   
    return view('javascript',compact("arr"));
}

}