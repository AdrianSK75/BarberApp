<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;


class ScheduleController extends Controller {
        public function makeAppointment() {
            $barber = User::all();
            return view('schedule.panel', ['barber' => $barber]);
        }

        public function storeEvent(Request $request) {
            $user_service = $request->input("barber");
            $appointment = new Appointment;
            $appointment->client_id = auth()->user()->id;
            $appointment->barber_id = $user_service[0];
            $appointment->service_id = $user_service[1];
            $appointment->scheduled_at = $request->input("viewSchedule");
            $appointment->save();

            return redirect('/programarile-mele');
        }

        public function viewInbox() {
                $appointments = Appointment::all();
                return view('appointment.inbox', ['appointments' => $appointments]);
        }
}
