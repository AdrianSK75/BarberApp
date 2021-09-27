<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;

class AppointmentController extends Controller {
    public function appointment() {
        $barber = User::all();
        return view('schedule.panel', ['barber' => $barber]);
    }
    public function calendar() {


        return view('appointment.calendar');
    }
}
