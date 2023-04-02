<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

//Route::get('/', function () { return view('welcome');});   // ova se dobije instalacijom

// ovo se dobije instalacijom Brezza
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Route::get('/', function () {return view('index');});  // ovo je bio prvi nacin preko funkcije
// Route::view(uri:'/', view: 'index')->name(name:'home'); // promenicemo i ovu krace napisanu u sledecu

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name(name:'home');

Route::view(uri:'/about', view:'about')->name(name:'about');
Route::view(uri: '/contact', view:'contact')->name(name:'contact');

// Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');  // jer menjamo i u postControlleru, bolje je ovako:
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name(name:'posts.show');



});

require __DIR__.'/auth.php';
