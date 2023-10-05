<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserAuth;

// use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("list",[EmployeeController::class,'getData']);

// Route::get('list',[MemberController::class,'list']);
Route::get('delete/{id}',[MemberController::class,'delete']);
Route::get('edit/{id}',[MemberController::class,'showData']);
Route::post('edit',[MemberController::class,'update']);

// Route::get('list',[UsersController::class,'operations']);

// Route::get('users',[UsersController::class,'index']);

// Route::get('list',[MemberController::class,'show']);
Route::post('add',[MemberController::class,'addData']);
Route::view('add','addmember');

// Route::get('/profile/{lang}', function ($lang) {
//     App::setlocale($lang);
//     return view('profile');
// });
// // Route::view('login','login');

// Route::get('/login', function () {
//     if(session()->has('user'))
//     {
//         return redirect('profile');
//     }
//     return view('login');
// });

// Route::get('/logout', function () {
//     if(session()->has('user'))
//     {
//     session()->pull('user',null);
//     }
//     return redirect('login');
// });



// Route::post("user",[UserAuth::class,'userLogin']);

// Route::view('store','storeuser');
// Route::post("storecontroller",[StoreController::class,'storeM']);


Route::resource('products', ProductController::class);

// Route::view("index",'/index');
// Route::view("about",'/about');
// Route::view("inner",'/inner');
// Route::view("check",'/check');
// Route::view("noaccess",'/noaccess');


//Route::view("home",'/home')->middleware('protectedPage');
//Route::view("users",'users')->middleware('protectedPage');

//Route::group(['middleware'=>['protectPage']],function(){
//
//  Route::view('users','users');
//
//    Route::get('/', function () {
//        return view('welcome');
//    });
//});
