<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArcticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class,'index']);


// LANGKAH-LANGKAH PRAKTIKUM ROUTING
//Langkah" Praktikum Ke 1
Route::get('/hello', function() {
    return ('Hello World');
});

//Langkah Praktikum Ke 2
Route ::get('/world', function () {
    return ('World');
});

//Langkah Praktikum Ke 3
Route ::get('/welcome', function() {
    return ('Selamat Datang');
});

//langkah Praktikum Ke 4
Route ::get('/about', [PageController::class,'about']);

//LANGKAH-LANGKAH PRAKTIKUM ROUTE PARAMETER
//Langkah Praktikum Ke 1
Route ::get('/user/{name}', function($name) {
    return 'Nama saya'.$name;
});

//Langkah Praktikum Ke 2
Route ::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke-'.$postId."Komentar ke-: ".$commentId;
});

//LANGKAH-LANGKAH PRAKTIKUM PARAMETER OPTIONAL
//Langkah Praktikum ke 1
Route ::get('/user/{name?}', function($name=null) {
    return 'Nama Saya' .$name;
});
//Langkah Praktikum ke 2
Route ::get('/user/{name?}', function($name='John') {
    return 'Nama Saya' .$name;
});


Route ::get('/hello', [WelcomeController::class,'hello']);

Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/home', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArcticlesController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::get('/greeting', function() {
    return view('blog.hello', ['name' => 'Wisang']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);