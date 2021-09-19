<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function learn() {
        return view('learn');
    }
}
