<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\WorkHour;
use Carbon\Carbon;

class ScheduleController extends Controller {
        public function storeEvent(Request $request) {
            $schedule = new Schedule;
            $schedule->scheduled_at = $request->input('viewSchedule');
            $schedule->save();

            return strval($schedule->scheduled_at);
        }

}
