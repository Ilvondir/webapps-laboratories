<?php
    $n = 4.5;
    $note;

    switch($n) {
        case 2.0:
            $note = "niedostateczny";
            break;
        case 3.0:
            $note = "dostateczny";
            break;
        case 3.5:
            $note = "dostateczny plus";
            break;
        case 4.0:
            $note = "dobry";
            break;
        case 4.5:
            $note = "dobry plus";
            break;
        case 5.0:
            $note = "bardzo dobry";
            break;
        default:
            $note = "";
    }

    echo $note.PHP_EOL;

    $note = match ($n) {
        2.0 => 'niedostateczny',
        3.0 => 'dostateczny',
        3.5 => 'dostateczny plus',
        4.0 => 'dobry',
        4.5 => 'dobry plus',
        5.0 => 'bardzo dobry',
        default => ""
    };

    echo $note.PHP_EOL;    
?>