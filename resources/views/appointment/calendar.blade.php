@extends('layouts.uicalendar')
@section('ui')

        <?php
                use Carbon\Carbon;
                use Illuminate\Support\Facades\DB;

                $dt = Carbon::create(now()->year, now()->month, now()->day);
                $bdt = Carbon::create($dt->year, $dt->month, $dt->startOfMonth()->day);
                $firstPos = $bdt->dayOfWeek;
                if ($firstPos == 1) {
                        $firstPos = 0;
                }
                $date = 1;

                function qempty($date) {
                        $date = substr(strval($date), 0, 10);
                        $appointments = DB::table('appointments')->where('date', $date)->get();

                        return $appointments;
                }
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
                <tbody>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                        @if ($i >= $firstPos)
                                @if (count(qempty(strval(Carbon::create(now()->year, now()->month, $date)))) > 0)
                                        <td>
                                            <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-primary"> {{ $date++ }} </a>
                                        </td>
                                @else
                                        <td>
                                            <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-danger"> {{ $date++ }} </a>
                                        </td>
                                @endif
                            @else
                            <td>
                                <p> - </p>
                            </td>
                            @endif
                    @endfor
                </tr>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            @if (count(qempty(strval(Carbon::create(now()->year, now()->month, $date)))) > 0)
                                    <td>
                                        <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-primary"> {{ $date++ }} </a>
                                    </td>
                            @else
                                    <td>
                                        <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-danger"> {{ $date++ }} </a>
                                    </td>
                            @endif
                    @endfor
                </tr>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            @if (count(qempty(strval(Carbon::create(now()->year, now()->month, $date)))) > 0)
                                    <td>
                                        <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-primary"> {{ $date++ }} </a>
                                    </td>
                            @else
                                    <td>
                                        <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-danger"> {{ $date++ }} </a>
                                    </td>
                            @endif
                    @endfor
                </tr>
                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            @if (count(qempty(strval(Carbon::create(now()->year, now()->month, $date)))) > 0)
                                    <td>
                                        <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-primary"> {{ $date++ }} </a>
                                    </td>
                            @else
                                    <td>
                                        <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-danger"> {{ $date++ }} </a>
                                    </td>
                            @endif
                    @endfor
                </tr>

                <tr>
                    @for ($i = 1; $i <= 7; $i++)
                            @if ($date <= $bdt->endOfMonth()->day)
                                    @if (count(qempty(strval(Carbon::create(now()->year, now()->month, $date)))) > 0)
                                            <td>
                                                <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-primary"> {{ $date++ }} </a>
                                            </td>
                                    @else
                                            <td>
                                                <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-danger"> {{ $date++ }} </a>
                                            </td>
                                    @endif
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
                                    @if (count(qempty(strval(Carbon::create(now()->year, now()->month, $date)))) > 0)
                                            <td>
                                                <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-primary"> {{ $date++ }} </a>
                                            </td>
                                    @else
                                            <td>
                                                <a href = "{{ strval(Carbon::create(now()->year, now()->month, $date)) }}" class = "btn btn-danger"> {{ $date++ }} </a>
                                            </td>
                                    @endif
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
            <a href = "/programarile-mele" class = "btn btn-outline-secondary"> Inapoi </a>
            </div>
@endsection


