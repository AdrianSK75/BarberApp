<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller {

    public function index() {
        $services = Service::orderBy('id')->paginate(2);
        return view('services.index', ['services' => $services]);
    }

    public function create() {
        return view('services.create');
    }

    public function store(Request $request) {

        $service = $this->validate($request, [
            'name' => 'required',
            'activity' => 'required',
            'description' => 'required',
            'time' => 'required',
            'price' => 'required',
       ]);

       $service = new Service();
       $service->name = $request->input('name');
       $service->activity = $request->input('activity');
       $service->description = $request->input('description');
       $service->time = $request->input('time');
       $service->price = $request->input('price');
       $service->save();

       return redirect('service');
    }
    public function edit($id) {
        $service = Service::findOrFail($id);
        return view('services.edit', ['service' => $service]);
    }


    public function update(Request $request, $id) {
        $service = $this->validate($request, [
            'name' => 'required',
            'activity' => 'required',
            'description' => 'required',
            'time' => 'required',
            'price' => 'required',
       ]);

       $service = Service::findOrFail($id);
       $service->name = $request->input('name');
       $service->activity = $request->input('activity');
       $service->description = $request->input('description');
       $service->time = $request->input('time');
       $service->price = $request->input('price');
       $service->save();

       return redirect('service');

    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect('/service');
    }
}
