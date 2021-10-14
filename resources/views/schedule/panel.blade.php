@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                    <form action="{{ route('storeEvent') }}" method="post" class = "form-group">
                        @csrf
                            <select name="barber" id="barber" class="form-select form-select-lg mb-3">
                                    @foreach ($barber as $u)
                                                @if ($u->status == 2)
                                                    @foreach ($u->service as $s)

                                                            <option value = "{{ $u->id . $s->id}}"> {{ $s->name }} => {{ $s->price }} lei / {{ $s->duration }} minute </option>

                                                    @endforeach
                                                @endif
                                    @endforeach
                            </select>

                            <input type="date" name="date" id="date" onchange="initialization()" class="form-control"><br>

                            <select name="hour" id="hour" onchange = "setTimestamp()" class="form-select form-select-lg mb-3"></select>

                            <input type = "hidden" name = "viewSchedule" id = "viewSchedule" value = "">
                            <button type = "submit" class = "btn btn-warning"> Confirmare </button>
                    </form>
            </div>
        </div><br>
        @if (auth()->user()->status == 2)
                <a href = "/servicii/create" class = "btn btn-success"> Creeaza un serviciu pentru clienti </a>
        @endif
    </div>
</div>
@include('schedule.javascript')

@endsection



