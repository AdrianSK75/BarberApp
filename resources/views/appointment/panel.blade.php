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

                                    <h5> {{ $user->lastname }}  {{ $user->firstname }} </h5>
                                    <hr>
                                            @foreach ($user->service as $service)
                                                        <form action="{{ route('storeEvent') }}" method="get">
                                                            @csrf
                                                            <h6> {{ $service->name }} </h6>
                                                            <small> {{ $service->price }} lei / {{ $service->duration }} minute </small>
                                                            <input type="hidden" name = "selectedBarber" value = "{{ $user->id }}">
                                                            <button type = "submit"></button>
                                                            <br><br>
                                                        </form>

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

