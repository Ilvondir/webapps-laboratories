<?php
    function division(int $x, int $y) {
        if ($y==0) {
            echo "Nie mozna dzielic przez 0.".PHP_EOL;
        }

        if (is_int($x)==false || is_int($y)==false) {
            echo "Dziele tylko liczby calkowite".PHP_EOL;
            return null;
        }

        return $x/$y;
    }

    try {
        $a = 11;
        $b = 13.1;

        if ($b==0) throw new InvalidArgumentException("Nie dziel przez 0!");

        if (is_integer($a)==false || is_integer($b)==false) throw new TypeError("Bad types");

        echo division($a, $b).PHP_EOL;
    }
    catch (InvalidArgumentException $e) {
        echo $e->getMessage().PHP_EOL;
    }
    catch (TypeError $e) {
        echo $e->getMessage();
        return null;
    }
?>