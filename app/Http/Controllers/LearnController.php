<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class LearnController extends Controller {


    public function learn() {
        $appointments = Appointment::all();
        $timestamps = $appointments->map(function ($item) {
                        return $item->scheduled_at;
        })->toArray();

        return view('learn', ['timestamps' => $timestamps]);
    }
}
