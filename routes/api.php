<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TasksController;
use App\Http\Controllers\API\UsersControllers;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });

// Route::get('/users', [UsersControllers::class, 'index']);
// Route::get('/users/{id}', [UsersControllers::class, 'show']);
Route::resource('/users', UsersControllers::class)->only(['index', 'show']); //zamenjeno sa resource only


// Route::get('/tasks', [TasksController::class, 'index']);           
// Route::get('/tasks/{id}', [TasksController::class, 'show']);
// zamenjene su sa resource (grupa od 7 razlicitih putanja) ali sa only definisem samo za odredjene
Route::resource('/tasks', TasksController::class)->only(['index', 'show']);


//Registracija korisnika
Route::post('/register', [AuthController::class, 'register']);

//Login
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('tasks', TasksController::class)->only(['update', 'store', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);

});