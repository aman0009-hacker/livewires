<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\rule;
class bind extends Controller
{
    public function the_Data(rule $id)
    {
        return $id;
    }
}