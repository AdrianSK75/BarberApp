<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\User;
use Carbon\Carbon;

class AppointmentController extends Controller {
    public function appointment() {
        $services = Services::all();
        $users = User::all();
        return view("appointment.panel", ['services' => $services, 'users' => $users]);
    }
    public function calendar() {


        return view('appointment.calendar');
    }
}
