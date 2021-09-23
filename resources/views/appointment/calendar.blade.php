@extends('layouts.uicalendar')

@section('ui')
        <?php
                use Carbon\Carbon;

                $dt = Carbon::create(now()->year, now()->month, now()->day);
                $bdt = Carbon::create($dt->year, $dt->month, $dt->startOfMonth()->day);
                $firstPos = $bdt->dayOfWeek;
                if ($firstPos == 1) {
                        $firstPos = 0;
                }
                $date = 1;
        ?>


    <div class="container">

        <div class="calendar">

        <header>
            <h2>{{ $bdt->englishMonth }} {{ $bdt->year }}</h2>
        </header>

        <table>

            <thead>

            <tr>

                <td>Mo</td>
                <td>Tu</td>
                <td>We</td>
                <td>Th</td>
                <td>Fr</td>
                <td>Sa</td>
                <td>Su</td>

            </tr>

            </thead>
            <form method ="POST" action="{{ route('storeEvent') }}" class="bg-white py-3 px-4 shadow rounded" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" id = "viewSchedule" name = "viewSchedule" value = "" readonly>
                <tbody>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                        @if ($i >= $firstPos)
                                <td>
                                    <input type ="button" class="btn btn-light" onclick = "getAvailableHours('<?php echo strval(Carbon::create(now()->year, now()->month, $date)) ?>');" name = 'day' value = "{{ $date++ }}">
                                </td>
                            @else
                            <td>
                                <p> - </p>
                            </td>
                            @endif
                    @endfor
                </tr>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            <td>
                                <input type ="button" class="btn btn-light" onclick = "getAvailableHours('<?php echo strval(Carbon::create(now()->year, now()->month, $date)) ?>');" name = 'day' value = "{{ $date++ }}">
                            </td>
                    @endfor
                </tr>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            <td>
                                <input type ="button" class="btn btn-light" onclick = "getAvailableHours('<?php echo strval(Carbon::create(now()->year, now()->month, $date)) ?>');" name = 'day' value = "{{ $date++ }}">
                            </td>
                    @endfor
                </tr>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            <td>
                                <input type ="button" class="btn btn-light" onclick = "getAvailableHours('<?php echo strval(Carbon::create(now()->year, now()->month, $date)) ?>');" name = 'day' value = "{{ $date++ }}">
                            </td>
                    @endfor
                </tr>

                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            @if ($date <= $bdt->endOfMonth()->day)
                                    <td>
                                        <input type ="button" class="btn btn-light" onclick = "getAvailableHours('<?php echo strval(Carbon::create(now()->year, now()->month, $date)) ?>');" name = 'day' value = "{{ $date++ }}">
                                    </td>
                            @else
                                    <td>
                                        <p> - </p>
                                    </td>
                            @endif
                    @endfor
                </tr>
                <tr>
                    @for ($i = 1; $date <= $bdt->endOfMonth()->day; $i++)
                            @if ($date <= $bdt->endOfMonth()->day)
                                <td>
                                    <input type ="button" class="btn btn-light" onclick = "getAvailableHours('<?php echo Carbon::create(now()->year, now()->month, $date) ?>');" name = 'day' value = "{{ $date++ }}">
                                </td>
                            @else
                                <td>
                                    <p> - </p>
                                </td>
                            @endif
                    @endfor
                </tr>

                </tbody>

            </table>
            <hr>
            </div>

            <select class = "form-control" name="hourChoice" id="hourChoice" onchange = "setDate();">
                    <option> Alege ora </option>
            </select>

        </div>
        <button type = "submit" class = "btn btn-warning"> Continua </button>
    </form>


@endsection


