<?php
    $a = 4;
    define("b", 10);
    $c = 4.0;
    $d = 5.667;

    echo "a + b = ". ($a+b).PHP_EOL;
    echo "a / b = ". ($a/b).PHP_EOL;
    echo "a ^ b = ". pow($a, b).PHP_EOL;
    echo "a % b = ". (b%$a).PHP_EOL;

    if ($a==b) echo "a == b = true".PHP_EOL;
    else echo "a == b = false".PHP_EOL;

    if ($a>b) echo "a > b = true".PHP_EOL;
    else echo "a > b = false".PHP_EOL;

    if ($a<b) echo "a < b = true".PHP_EOL;
    else echo "a < b = false".PHP_EOL;

    if ($a==$c) echo "a == c = true".PHP_EOL;
    else echo "a == c = false".PHP_EOL;

    if ($a===$c) echo "a === c = true".PHP_EOL;
    else echo "a === c = false".PHP_EOL;

    echo "[d] = ". floor($d).PHP_EOL;
    echo "round(d, 2) = ". round($d, 2).PHP_EOL;
?>