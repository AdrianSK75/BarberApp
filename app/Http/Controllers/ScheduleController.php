<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;

class ScheduleController extends Controller {
        public function storeEvent(Request $request) {
            $appointment = new Appointment;
            $appointment->client_id = auth()->user()->id;
            $appointment->barber_id = $request->input("barber");
            $appointment->scheduled_at = $request->input("viewSchedule");
            $appointment->save();

            return 'success';
        }

        public function viewInbox() {
            
        }

        public function viewAppointment($id) {
                $appointment = Appointment::findOrFail($id);
                $barber = User::findOrFail($appointment->barber_id);
                $client = User::findOrFail($appointment->client_id);

        }

}
