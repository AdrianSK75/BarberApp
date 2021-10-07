<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\LearnController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// User Routes
Route::get('/profilul-meu', [UserController::class, 'profile'])->middleware('auth')->middleware('admin');


// Service Routes
Route::resource('servicii', ServiceController::class)->middleware('admin');
Route::post('servicii', [ServiceController::class, 'store'])->name('servicii.store');
Route::post('servicii/{servicii::id}', [ServiceController::class, 'update']);


// Schedule Routes
Route::get('/setare-program', function () {
    return view('schedule.panel');
});


// Appointment Routes
Route::get('fa-o-programare', [ScheduleController::class, 'makeAppointment'])->middleware('auth');
Route::post('fa-o-programare', [ScheduleController::class, 'storeEvent'])->name('storeEvent');
Route::get('programarile-mele', [ScheduleController::class, "viewInbox"])->middleware('auth');




//Test
Route::get('learn', [LearnController::class, 'learn'])->middleware('auth');
