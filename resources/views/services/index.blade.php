@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                    @if(count($services) > 0)
                        @foreach ($services as $service)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $service->name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted"> {{ $service->activity }} </h6>
                                    <p> {{ $service->price }} lei </p>
                                    <p> {{ $service->time }} minute </p>
                                    <a href="service/{{ $service->id }}/edit" class="btn btn-outline-primary"> Edit </a>

                                </div>
                            </div>
                            <br>
                        @endforeach
                    @else
                        <div class="alert alert-warning" role="alert">
                            No services found!
                        </div>
                    @endif
                    <br>

                    <a href = "service/create" class = "btn btn-outline-primary"> Create a service </a>
            </div>
        </div>


@endsection
