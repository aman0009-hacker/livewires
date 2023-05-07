<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class getApiSData extends Controller
{
    public function api_data()
    {
        $datas= http::get('https://dummyjson.com/products');
        $data=$datas['products'];
        return view('apiDisplay',compact('data'));
    }
}