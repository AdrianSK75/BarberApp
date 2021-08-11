@extends('layouts.app')

@section('content')

<div class = "container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Prenume</th>
                    <th scope="col">Nume</th>
                    <th scope="col">Numar de telefon</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td scope="row">{{ $client->forename }}</td>
                            <td>{{ $client->name }}</td>
                            <td> {{ $client->phone }} </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
              <a class = "btn btn-primary" href = "/clienti-adauga">Adauga</a>
        </div>
    </div>
</div>

@endsection
<!--  -->
