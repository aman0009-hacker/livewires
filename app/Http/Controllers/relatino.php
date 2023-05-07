<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rel;

class relatino extends Controller
{
    public function main()
    {
        return rel::find(1)->ab;
    }
}