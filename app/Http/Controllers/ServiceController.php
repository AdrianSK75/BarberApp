<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller {

    public function index() {
        $services = Service::orderBy('id')->paginate(15);
        return view('services.index', ['service' => $services]);
    }

    public function create() {
        return view('services.create');
    }

    public function store(Request $request) {
        $this-> validate($request, [
            'service_name' => 'required',
            'activityType' => 'required',
            'description' => 'required',
            'time' => 'required',
            'price' => 'required',
        ]);

       return Service::create($request->all());
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('services.edit')->with('post', $service);
    }


    public function update(Request $request, $id) {
        $this->validate($request, [
            'service_name' => 'required',
            'activity' => 'required',
            'body' => 'required',
            'services_time' => 'required',
            'service_price' => 'required',
       ]);

       $service = Service::find($id);
       $service->service_name = $request->input('service_name');
       $service->activity = $request->input('activity');
       $service->body = $request->input('body');
       $service->services_time = $request->input('services_time');
       $service->service_price = $request->input('service_price');
       $service->save();

       return redirect('/service');

    }

    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect('/service');
    }
}
