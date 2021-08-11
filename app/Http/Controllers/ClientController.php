<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller {
    public function index() {
        $clients = Client::orderBy('id')->paginate(10);
        return view('clients.panel', ['clients' => $clients]);
    }

    public function add() {
            return view('clients.add');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'forename' => 'required',
            'phone' => 'required',
        ]);

        $client = new Client;
        $client->forename = $request->input('forename');
        $client->name = $request->input('name');
        $client->phone = $request->input("phone");
        $client->save();

        return redirect('clienti');
    }
}
