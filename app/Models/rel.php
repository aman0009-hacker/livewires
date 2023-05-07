<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rel extends Model
{

    public function ab()
    {
        return $this->hasMany('App\Models\rule');
    }
    
    use HasFactory;
}