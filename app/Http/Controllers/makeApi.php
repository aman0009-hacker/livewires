<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class makeApi extends Controller
{
    function api()
    {
        return ["name"=>"aman",'contact'=>7976834358,'address'=>"#1251 phase-5 Mohali"];
    }
}