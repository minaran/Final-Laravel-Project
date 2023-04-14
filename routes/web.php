<?php

use App\Http\Controllers\API\UnsplashApiController;
use App\Http\Controllers\TasksController;
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

// Route::get('/', function () {return view('index');});  // ovo je bio prvi nacin preko funkcije
// Route::view(uri:'/', view: 'index')->name(name:'home'); // promenicemo i ovu krace napisanu u sledecu:
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name(name:'home');

Route::view(uri:'/about', view:'about')->name(name:'about');
Route::view(uri: '/contact', view:'contact')->name(name:'contact');

// Route::view(uri: '/gallery', view:'gallery')->name(name:'gallery');  // korigovana i promenjena:
Route::get('/gallery', [UnsplashApiController::class, 'show'])->name(name:'gallery');

// Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');  // jer menjamo i u postControlleru, bolje je ovako:
Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name(name:'posts.show');
    

// ovo se dobije instalacijom Brezza
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog', [TasksController::class, 'index'])->name('blog'); //prikazuje sve taskove
    Route::get('/blog/{id}', [TasksController::class, 'show']); //prikazuje jedan tasks iz baze
    Route::get('/blog/create/task', [TasksController::class, 'create']); // prikazuje create formu
    Route::post('/blog/create/task', [TasksController::class, 'store']); // cuva kreirani task u bazu
    Route::get('/blog/{id}/edit', [TasksController::class, 'edit']); // prikazuje edit formu
    Route::put('/blog/{id}/edit', [TasksController::class, 'update']); // cuva azurirani task u bazu
    Route::delete('/blog/{id}', [TasksController::class, 'destroy']); // brise task iz baze



});

require __DIR__.'/auth.php';