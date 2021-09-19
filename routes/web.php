<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\LearnController;

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
Route::post('servicii/{servicii::id}', [ServiceController::class, 'update']);



// Schedule Routes
Route::post('schedule', [ScheduleController::class, 'setSchedule'])->name('schedule.store');


// Appointment Routes
Route::get('fa-o-programare', [AppointmentController::class, 'appointment']);
Route::get('fa-o-programare/calendar', [AppointmentController::class, 'calendar']);


//Test
Route::get('learn', [LearnController::class, 'learn']);
