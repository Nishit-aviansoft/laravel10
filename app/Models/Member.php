<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false;

    // function getNameAttribute($value)
    // {
    //     return ucFirst($value);
    // }
    // function getAddressAttribute($value)
    // {
    //     return ucFirst($value);
    // }
    public function setNameAttribute($value)
    {
        return $this->attributes['name']= 'Mr. '.$value;
    }
    public function setAddressAttribute($value)
    {
        return $this->attributes['address']=$value.", India";
    }
}
