<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function index(Request $request){
        return $request->file('file')->store('img');
    }
}
