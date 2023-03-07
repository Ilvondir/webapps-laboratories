<?php
    $l = 10;

    function rd() {
        global $l;
        $l = random_int(1, 50);
    }

    rd();

    echo $l.PHP_EOL;
?>