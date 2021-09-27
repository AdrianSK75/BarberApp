@extends('layouts.app')

@section('content')
<?php
    $hours = array();
    $h = 0;
    for ($i = 9; $i < 22; $i++) {
        $hours[++$h] = strval($i . ":00");
        $hours[++$h] = strval($i . ":30");
    }

?>

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

                                                            <option value = "{{ $u->id }}"> {{ $s->name }} => {{ $s->price }} lei / {{ $s->duration }} minute </option>

                                                    @endforeach
                                                @endif
                                    @endforeach
                            </select>
                            <input type = "hidden" name = "viewSchedule" id = "viewSchedule" value = "">
                            
                            <input type="date" name="date" id="date" onchange="setTimestamp()" class="form-control"><br>

                            <select name="hour" id="hour" onchange = "setTimestamp()" class="form-select form-select-lg mb-3">
                                    @for ($i = 1; $i <= count($hours); $i++)
                                            <option value = "{{ $hours[$i] }}"> {{ $hours[$i] }} </option>
                                    @endfor
                            </select>

                            <input type = "hidden" name = "viewSchedule" id = "viewSchedule" value = "">
                            <button type = "submit" class = "btn btn-warning"> Confirmare </button>
                    </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();

        var maxDate = year + '-' + month + '-' + day;
        $('#date').attr('min', maxDate);
    });
    const timestamp = document.getElementById('viewSchedule');
    const date = document.getElementById('date');
    const hour = document.getElementById('hour');

    let setTimestamp = () => {
            timestamp.value = date.value + " " + hour.value;
            console.log(timestamp.value);
    }



</script>

@endsection



