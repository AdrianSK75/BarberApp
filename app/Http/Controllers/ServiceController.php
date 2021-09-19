<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServiceController extends Controller {
    private function insertInDatabase($service, $request) {
        $service->name = $request->input('name');
        $service->duration = $request->input('duration');
        $service->price = $request->input('price');
        $service->save();
    }


    public function index() {
        $service = Services::all();
        return view('services.index' , ['service' => $service]);
    }

    public function create() {
        return view('services.create');
    }

    public function store(Request $request) {
       $service = new Services;
       self::insertInDatabase($service, $request);
       return redirect(route('servicii.index'));
    }

    public function edit($id) {
        $service = Services::findOrFail($id);
        return view('services.edit' , ['service' => $service]);
    }

    public function update(Request $request, $id) {
       $service = Services::findOrFail($id);
       self::inserInDatabase($service, $request);
       return redirect(route('servicii.index'));
    }
}
