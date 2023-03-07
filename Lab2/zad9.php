<?php
    $fruits = [ "banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry" ];
    
    echo "Tablica ma ". count($fruits). " elementy".PHP_EOL;

    foreach($fruits as $f) {
        echo $f.PHP_EOL;
    }

    print_r($fruits);

    array_push($fruits, "lemon");
    array_pop($fruits);

    sort($fruits);

    print_r($fruits);
?>