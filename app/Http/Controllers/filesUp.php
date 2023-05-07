<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filesUp extends Controller
{
    public function upload(Request $req)
    {
        
        return $req->file('docs')->store('img');

        
        
        
    }
}