<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[dummyAPI::class,'getData']);

Route::get("list/{id?}",[ProductController::class,'list']);

Route::post("add",[ProductController::class,'add']);

Route::put("update",[ProductController::class,'update']);

Route::get("search/{name}",[ProductController::class,'search']);

Route::post("validate",[ProductController::class,'testData']);

// Route::apiResource("product",ProductController::class);

Route::apiResource('products', ProductController::class);

Route::post("upload",[FileController::class,'upload']);
