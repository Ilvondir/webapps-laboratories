<?php
    $text1 = " Programuję dobrze ";
    $text2 = "dobrze w PHP. ";

    echo "Length text1 = ". mb_strlen($text1). PHP_EOL;
    echo strrev($text1). PHP_EOL;
    
    if (strlen($text1) > strlen($text2)) echo "Dłuższy: text1". PHP_EOL;
    else echo "Dłuższy: text2".PHP_EOL;

    if (str_contains($text1, "Programuję")) {
        echo $text1. "zawiera 'Programuję'".PHP_EOL;
    }

    if (str_contains($text2, "dobrze")) {
        echo $text2. "zawiera 'dobrze'".PHP_EOL;
    }

    echo trim($text1). " ". trim($text2).PHP_EOL;

    $text3 = trim($text1). " ". trim($text2);
    $text3 = explode(" ", $text3);
    echo $text3[0]. $text3[1]. $text3[2]. $text3[3]. $text3[4].PHP_EOL;

    echo str_replace("dobrze", "źle", $text1).PHP_EOL;

    echo mb_strpos($text2, false).PHP_EOL;

    echo mb_strtoupper($text1).PHP_EOL;

    echo mb_strtoupper($text2[0]). mb_substr($text2, 1, strlen($text2)-1).PHP_EOL;

    echo mb_substr($text2, 9, 3);
?>