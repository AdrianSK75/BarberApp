<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// User Routes
Route::get('/profilul-meu', [UserController::class, 'profile'])->middleware('auth');
Route::get('user-panel', [UserController::class, 'manage'])->middleware('admin');


// Service Routes
Route::resource('servicii', ServiceController::class);
Route::post('servicii', [ServiceController::class, 'store'])->name('servicii.store');
Route::post('servicii/{service::id}', [ServiceController::class, 'update'])->name('service.update');


// Schedule Routes
Route::get('program', function() {
        return view('schedule.panel');
});


// Appointment Routes
Route::get('fa-o-programare', [AppointmentController::class, 'appointment']);
Route::get('fa-o-programare/calendar', [AppointmentController::class, 'calendar']);


// Clients
Route::get('clienti', [ClientController::class, 'index'])->name('clients.index');
Route::get('clienti-adauga', [ClientController::class, 'add']);
Route::post('clienti', [ClientController::class, 'store'])->name('clients.store');
