<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    function storeM(Request $request)
    {
        $data = $request->input('user');
        $request-> session()->flash('user',$data);
        return redirect('store');
    }
}