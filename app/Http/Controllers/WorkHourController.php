<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkHour;

class WorkHourController extends Controller
{
    public function index() {
        return view('schedule.panel');
    }

    public function store(Request $request) {
        $workhour = new WorkHour;
        $workhour->starttime = $request->input('starttime');
        $workhour->endtime = $request->input('endtime');
        $workhour->save();
    }
}
