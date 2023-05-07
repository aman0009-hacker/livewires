<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
     function form(Request $req)
    {
        $data=$req->all();
        $dat_sess=$req->get('name');
        session()->put('user',$dat_sess);

       return redirect('home');
    }
}