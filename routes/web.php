<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\FileUpload;
=======
>>>>>>> 9e520cd5d3846cdf738477017850353657e5b3b8

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
<<<<<<< HEAD

Route::get('/image-upload', [FileUpload::class, 'createForm']);

Route::post('/image-upload', [FileUpload::class, 'fileUpload'])->name('imageUpload');

Route::get('/image-view',[FileUpload::class, 'display']);
=======
>>>>>>> 9e520cd5d3846cdf738477017850353657e5b3b8
