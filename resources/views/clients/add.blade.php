@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <form method ="POST" action="{{ route('clients.store') }}" class="bg-white py-3 px-4 shadow rounded" enctype="multipart/form-data">
            @csrf
            <div class = "form-group">
                <label for="forename"> Prenume </label>
                <input type ="text"  class="form-control" id = "forename" name="forename"/>
            </div>
            <div class = "form-group">
                <label for="name"> Nume </label>
                <input type ="text"  class="form-control" id = "name" name="name"/>
            </div>
            <div class = "form-group">
                <label for="phone"> Numar de telefon </label>
                <input type ="tel" name="phone" class="form-control" id = "phone"/>
            </div>
            <div class = "form-group">
                <input type="submit" class = "btn btn-success"  value = "Adauga">
                <a href = "{{ route('clients.index') }}" type="submit" class = "btn btn-danger"> Anuleaza </a>
            </div>

        </form>
    </div>
</div>
@endsection
