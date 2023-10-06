<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    
    // function index()
    // {
    //     return DB::select("select * from products");
    // }
    // function userLogin(Request $request)
    // {
    //    $data =  $request->input('user');
    //    $request->session()->put('user',$data);
    //     return redirect('profile');
    // }
//    function index(){
//
//        $data = Http::get("https://reqres.in/api/users?page=1");
//        return view('users',['collection'=>$data['data']]);
//    }
//    {
//        $data=['anil','peter',"Locky",'bruce'];
//        return view('users',['users'=>$data]);
//        $request->validate([
//            'username'=>'required | max:10',
//            'userpassword'=>'required | max:3'
//        ]);
//        return $request->input();
//    }

    //    function operations()
    //    {
    //         return DB::table('members')->max('name');
    //    } 
          function index(Request $req)
          {
            
          }
}
