<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/


// Route::get('/', function () {return view('index');});  // ovo je bio prvi nacin preko funkcije
// Route::view(uri:'/', view: 'index')->name(name:'home'); // promenicemo i ovu krace napisanu u sledecu

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name(name:'home');

Route::view(uri:'/about', view:'about')->name(name:'about');
Route::view(uri: '/contact', view:'contact')->name(name:'contact');

Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');