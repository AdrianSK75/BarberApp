<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LearnController extends Controller {
    public $unavailable = array();

    public function learn() {
        $time = Carbon::create(21, 9, 21);
        for ($i = 9; $i < 22; $i++) {
                $unavailable[strval($i) . ":00"] = $time->addDay();
                $unavailable[strval($i) . ":30"] = $time->addDay();
        }

        return view('learn', ['unavailable' => $unavailable]);
    }
}
