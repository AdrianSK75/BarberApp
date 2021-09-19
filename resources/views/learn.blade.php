<?php
    use Carbon\Carbon;

    $dt = Carbon::create(now()->year, now()->month, now()->day);
    $bdt = Carbon::create($dt->year, $dt->month, $dt->startOfMonth()->day);
    $edt = Carbon::create($dt->year, $dt->month, $dt->endOfMonth()->day);

    $lastDayOfMonth = (int)$bdt->subDay()->day;
    $firstDayOfMonth = (int)$edt->addDay()->day;

    $lpos = 0; $fpos = 0;
    while ($bdt->isoFormat('dddd') != 'Monday') {
            $bdt->subDay();
            ++$lpos;
    }

    while ($edt->isoFormat('dddd') != 'Sunday') {
            $edt->addDay();
            ++$fpos;
    }
?>


<p> {{ $lpos }}  {{ $fpos }} {{ $lastDayOfMonth }}  {{ $firstDayOfMonth }}</p>
