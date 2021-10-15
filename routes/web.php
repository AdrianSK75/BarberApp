<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LearnController;
use App\Models\Appointment;

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
    Route::get('fa-o-programare', [AppointmentController::class, 'makeAppointment']);
    Route::post('fa-o-programare', [AppointmentController::class, 'storeEvent'])->name('storeEvent');
    Route::get('programarile-mele', [AppointmentController::class, "viewInbox"]);
    Route::get('programarile-mele/calendar', [AppointmentController::class, "showInboxCalendar"])->middleware('admin');
    Route::get('programarile-mele/{appointments::date}', [AppointmentController::class, "viewDayInbox"])->middleware('admin');

//Test
    Route::get('learn', [LearnController::class, 'learn']);
});
