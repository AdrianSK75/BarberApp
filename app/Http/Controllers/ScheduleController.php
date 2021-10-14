<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller {

        public function makeAppointment() {
            $barber = User::all();
            $appointments = Appointment::all();
            $timestamps = $appointments->map(function ($item) {
                        return $item->scheduled_at;
            })->toArray();
            return view('schedule.panel', ['barber' => $barber, 'timestamps' => $timestamps]);
        }

        private function insertInDataBase($request, $appointment) {
            $user_service = $request->input("barber");
            $appointment->client_id = auth()->user()->id;
            $appointment->barber_id = $user_service[0];
            $appointment->service_id = $user_service[1];
            $appointment->scheduled_at = $request->input("viewSchedule");
            $appointment->date = $request->input('date');
            $appointment->save();
        }

        public function storeEvent(Request $request) {
            $appointment = new Appointment;

            self::insertInDataBase($request, $appointment);

            return redirect('programarile-mele');
        }

        public function viewInbox() {
                $appointments = Appointment::all();
                return view('appointment.inbox', ['appointments' => $appointments]);
        }

        public function viewDayInbox($date) {
                $date = substr(strval($date), 0, 10);
                $appointments = DB::table('appointments')->where('date', $date)->get();
                return view('appointment.inbox', ['appointments' => $appointments]);
        }

        public function showInboxCalendar() {
                return view('appointment.calendar');
        }
}
