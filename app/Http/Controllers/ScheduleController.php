<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Carbon\Carbon;

class ScheduleController extends Controller {
        public function setSchedule(Request $request, $data) {
            $schedule = new Schedule;
            $schedule->scheduled_at = $request->input('dateSelected');
            $schedule->hour = $request->input('hourSelected');
            $schedule->save();

            return 'success';
        }

}
