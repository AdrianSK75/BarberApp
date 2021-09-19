@extends('layouts.app');

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method ="POST" action="{{ route('servicii.store') }}" class="bg-white py-3 px-4 shadow rounded" enctype="multipart/form-data">
                @csrf
                <div class = "form-group">
                    <label for="name"> Nume serviciu* </label>
                    <input type ="text"  class="form-control" id = "serviceName" name="name"/>
                </div>

                <div class = "form-group">
                    <label for="duration"> Durata serviciului* </label>
                    <input type ="tel" name="duration" class="form-control" id = "serviceDuration" placeholder="(timpul in minute)"/>
                </div>

                <div class = "form-group">
                    <label for="price"> Pretul serviciului* </label>
                    <input type ="tel" name="price" class="form-control" id = "servicePrice"/>
                </div>
                <div class = "form-group">
                    <input type="submit" class = "btn btn-success"  value = "Salveaza">
                    <a href = "{{ route('servicii.index') }}" type="submit" class = "btn btn-danger"> Anuleaza </a>
                </div>

            </form>
        </div>
    </div>

@endsection
