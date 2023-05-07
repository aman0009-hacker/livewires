<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use App\Models\manage;

use Illuminate\Http\Request;

class fetchData extends Controller
{
    public function fetch_data()
    {
        $data=manage::paginate(5);
         return view('dataShow',compact('data'));
        
    }
}