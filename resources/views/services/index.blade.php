@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <a href = "profilul-meu" class = "btn btn-outline-secondary"> Inapoi </a>
                    <a href = "servicii/create" class = "btn btn-outline-primary"> Creeaza un serviciu </a>
                    @if(count($services) > 0)
                        @foreach ($services as $service)
                            <div class="alert alert-secondary" role="alert">
                                <h5 class="card-title">{{ $service->name }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"> {{ $service->activity }} </h6>
                                <p> {{ $service->price }} lei / {{ $service->time }} minute</p>
                                <a href="servicii/{{ $service->id }}/edit" class="btn btn-outline-primary"> Edit </a>
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
