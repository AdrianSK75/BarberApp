@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
            <h2> Barber Shop </h2>
            <h4> Strada Oitelor nr. 4 </h4>
            <br>
                @if (count($services) > 0)
                    @foreach ($users as $user)
                        @if ($user->status === 2 || $user->status === 1)
                        <div class = "card">
                            <div class = "card-body">
                                <h5> {{ $user->forename }}  {{ $user->name }} </h5>
                                <hr>
                                        @foreach ($services as $service)
                                                    @if ($user->id === $service->user_id)
                                                        <h6> {{ $service->name }} </h6>
                                                        <small> {{ $service->price }} lei / {{ $service->time }} minute </small>
                                                        <a href = "fa-o-programare/calendar" class = "btn btn-warning btn-sm"> Rezerva </a>
                                                        <br><br>
                                                    @else
                                                        <p> Servicii private </p>
                                                        @break
                                                    @endif
                                        @endforeach
                                    <smalL> Numar de telefon: <strong>{{ $user->phone }}</strong> </small>
                            </div>
                        </div><br>
                        @endif
                    @endforeach
                @else
                        <p> Doar servicii private </p>
                @endif

    </div>
</div>

@endsection
