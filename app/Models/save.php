<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class save extends Model
{
    public $timestamps=false;
    
    use HasFactory;

  function setNameAttribute($value)
  {
    return $this->attributes['name']=$value." chaudhay";
  }
}