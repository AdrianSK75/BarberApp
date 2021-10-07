@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <h3> Serviciile mele </h3>
                    <a href = "profilul-meu" class = "btn btn-outline-secondary"> Inapoi </a>
                    <a href = "fa-o-programare" class = "btn btn-outline-warning"> Pagina cu programari </a>
                    <a href = "servicii/create" class = "btn btn-outline-primary"> Creeaza un serviciu </a>
                    <hr>
                        @if(count($service) > 0 )
                            @foreach ($service as $s)
                                <div class="alert alert-secondary" role="alert">
                                    <h5 class="card-title">{{ $s->name }}</h5>
                                    <p> {{ $s->price }} lei / {{ $s->duration }} minute</p>
                                    <a href="servicii/{{ $s->id }}/edit" class="btn btn-outline-primary"> Edit </a>
                                </div>
                                <br>
                            @endforeach
                        @else
                            <div class="alert alert-warning" role="alert">
                                Nu s-au gasit servicii!
                            </div>
                        @endif
            </div>
        </div>

@endsection
