<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\LearnController;


Route::view('/', 'welcome');


Auth::routes();

Route::group(['middleware' => 'auth'], function() {
// User Routes
    Route::get('/profilul-meu', [UserController::class, 'profile'])->middleware('admin');


// Service Routes
    Route::resource('servicii', ServiceController::class)->middleware('admin');
    Route::post('servicii', [ServiceController::class, 'store'])->name('servicii.store');
    Route::post('servicii/{servicii::id}', [ServiceController::class, 'update']);

// Appointment Routes
    Route::get('fa-o-programare', [ScheduleController::class, 'makeAppointment']);
    Route::post('fa-o-programare', [ScheduleController::class, 'storeEvent'])->name('storeEvent');
    Route::get('programarile-mele', [ScheduleController::class, "viewInbox"]);
    Route::get('programarile-mele/calendar', [ScheduleController::class, "showInboxCalendar"])->middleware('admin');
    Route::get('programarile-mele/{date}', [ScheduleController::class, "viewDayInbox"])->middleware('admin');

//Test
    Route::get('learn', [LearnController::class, 'learn']);
});
