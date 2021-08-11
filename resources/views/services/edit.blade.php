@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <form method ="POST" action="/servicii/ {{ $service->id }}" class="bg-white py-3 px-4 shadow rounded" enctype="multipart/form-data">
            @csrf
            <div class = "form-group">
                <label for="name"> Nume serviciu* </label>
                <input type ="text"  class="form-control" id = "serviceName" name="name" value = "{{ $service->name }}"/>
            </div>

            <div class = "form-group">
                <label for="activity"> Tip de activitate* </label>
                <input type ="text"  class="form-control" id = "serviceName" name="activity" value = "{{ $service->activity }}"/>
            </div>

            <div class = "form-group">
                <label for="description"> Descriere Serviciu </label>
                <textarea class="form-control" name = "description" id="bodyArea" rows="5" placeholder="(optional)"> {{ $service->description }}  </textarea>
            </div>

            <div class = "form-group">
                <label for="time"> Durata serviciului* </label>
                <input type ="tel" name="time" class="form-control" id = "serviceTime" value = "{{ $service->time }}"/>
            </div>

            <div class = "form-group">
                <label for="price"> Pretul serviciului* </label>
                <input type ="tel" name="price" class="form-control" id = "servicePrice" value = "{{ $service->price }}" />
            </div>
            <div class = "form-group">
                <input type="submit" class = "btn btn-success"  value = "Salveaza">
                <a href = "{{ route('servicii.index') }}" type="submit" class = "btn btn-danger"> Anuleaza </a>
            </div>

        </form>
    </div>
</div>
@endsection
