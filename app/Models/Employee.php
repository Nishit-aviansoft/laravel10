<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    use HasFactory;
   
    function getCompany()
    {
        
        return $this->hasMany('App\Models\Company');
    }
    
}

