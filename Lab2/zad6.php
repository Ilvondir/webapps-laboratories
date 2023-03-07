<?php
    function ctf(?float $c = null) {
        if (is_null($c)) {
            echo "Nie podano wartosci!".PHP_EOL;
            return null;
        } else return (9/5) * $c + 32;
    }

    ctf();

    echo ctf(10.1). " F". PHP_EOL;
?>