<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



//building out CRUD
//posts 
//1.get all(GET)
//2.create post (POST)
//2.get single(GET)
//3.update singe (PUT/PATCH)
//4.delete(DELETE)

Route::get('/testing-the-api',function(){ return ['message'=>'hello'];});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
