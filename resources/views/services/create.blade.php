@extends('layouts.app');

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form class="bg-white py-3 px-4 shadow rounded" action="{{ route('service.store') }}" method ="POST ">
                <div class = "form-group">
                    <label for="service_name"> Nume serviciu* </label>
                    <input type ="text"  class="form-control" id = "serviceName"/>
                </div>

                <div class = "form-group">
                    <label for="activityType"> Tip de activitate* </label>
                    <select class="form-select" id = "activityType">
                        <option selected></option>
                        @foreach($activity as $activities)
                                <option>  {{ $activities->activity }} </option>
                        @endforeach
                      </select>

                </div>

                <div class = "form-group">
                    <label for="body"> Descriere Serviciu </label>
                    <textarea class="form-control" id="bodyArea" rows="5" placeholder="(optional)"></textarea>
                </div>

                <div class = "form-group">
                    <label for="service_time"> Durata serviciului* </label>
                    <input type ="tel"  class="form-control" id = "serviceTime"/>
                </div>

                <div class = "form-group">
                    <label for="service_price"> Pretul serviciului* </label>
                    <input type ="tel"  class="form-control" id = "servicePrice"/>
                </div>
                <div class = "form-group">
                    <input type="submit" class = "btn btn-success"  value = "Salveaza">
                    <a href = "{{ route('service.index') }}" type="submit" class = "btn btn-danger"> Anuleaza </a>
                </div>

            </form>
        </div>
    </div>

@endsection
