<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller {
    public function profile() {
            if(auth()->user()->status === 2 || auth()->user()->status === 1)
                return view('user.admin');
            return view('user.user');
    }

    public function manage() {
            $users = User::all();
            return view('user.panel', ['users' => $users]);
    }

    public function grade($id) {
        $user = User::find($id);

        if($user->status === 1) {
            $user->status = null;
        } else {
            $user->status = 1;
        }
        $user->save();

        return redirect('user-panel');
    }
}

