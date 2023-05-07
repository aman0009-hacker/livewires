<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\save;
use Illuminate\Support\Facades\DB;
class join extends Controller
{
    function joining()
    {
       
       return DB::table('saves')->join('user_company', 'user_company.saves_id','=', 'saves.id')->get();
        
    }
}