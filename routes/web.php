<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;


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

Auth::routes();

Route::get('/appointments', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

// User Routes
Route::get('/user/{phone}', function() {
        return view('user.user');
})->middleware('auth');
Route::get('/user/{phone}/admin', function() {
    return view('user.admin');
})->middleware('admin');
Route::get('user-panel', [UserController::class, 'manage'])->middleware('admin');


// Service Routes
Route::resource('service', ServiceController::class);
Route::post('service', [ServiceController::class, 'store']);
Route::post('service/{id}', [ServiceController::class, 'update']);

// Schedule Routes
Route::get('schedule', function() {
        return view('schedule.panel');
});
