<?php
    $people = [
        "Jan" => 45,
        "Piotr" => 12,
        "Zygmunt" => 33,
        "Bartosz" => 41
    ];

    while ($wiek = current($people)) {
        
        echo key($people). " ma ". $wiek. " lat. ";

        next($people);
    }
    echo PHP_EOL;

    echo "Tablica ma ". count($people). " elementy.".PHP_EOL;

    echo "Bartosz ma ". $people["Bartosz"]. " lat.".PHP_EOL;

    $people = array_merge($people, ["Witold" => 28]);

    unset($people["Piotr"]);

    print_r($people);

    arsort($people);
    print_r($people);
?>