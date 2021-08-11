<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;

class AppointmentController extends Controller {
    public function appointment() {
        $services = Service::all();
        $users = User::all();
        return view("appointment.panel", ['services' => $services, 'users' => $users]);
    }
    public function calendar() {
        return view('appointment.calendar');
    }
}
