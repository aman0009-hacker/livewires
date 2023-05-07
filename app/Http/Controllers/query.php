<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\save;
class query extends Controller
{
    public function the_query()
    {
      
    return DB::table('saves')->avg('id');
    
     
    }
}