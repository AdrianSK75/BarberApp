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

Route::get('/user/{phone}', function($phone) {
        if(auth()->user()->phone !== $phone)
            abort(404);
        return view('user.dashboard');
})->middleware('auth');

Route::get('/user/{phone}/admin', function($phone) {
    return view('user.admin');
})->middleware('admin');

Route::resource('service', ServiceController::class)->middleware('auth');

//Route::post('/service', [ServiceController::class, 'store']);

Route::get('service/create', function($activity) {
            return view('services.create')->with('activity', $activity);
});
