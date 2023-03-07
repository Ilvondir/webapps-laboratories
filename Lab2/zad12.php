<?php

    setlocale(LC_TIME, 'pl_PL');
    date_default_timezone_set("Europe/Warsaw");

    echo date("l, d-m-Y").PHP_EOL;

    echo date("Y-F-d G:i").PHP_EOL;

    $now = time();
    $dateToCom = strtotime("12.02.2020");
    echo round((($now-$dateToCom)/(60*60*24))).PHP_EOL;

    $now2 = time();
    $dateToCom2 = strtotime("today 07:00");
    $dist = $now2 - $dateToCom2;
    $mins = round($dist%3600/60);
    $hours = round(($dist/(60*60)));
    echo $hours."h ". $mins. "min".PHP_EOL;

    $tod = strtotime("now");
    $com = strtotime("01.04.2021");
    if ($tod<$com) echo "Dzis jest wczesniejsze".PHP_EOL;
    echo "1 kwietnia 2021 jest wczesniejsze".PHP_EOL;
?>