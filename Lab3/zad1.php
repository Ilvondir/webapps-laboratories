<?php
$fruits = ["banana", "apple", "strawberry", "grape", "orange", "watermelon", "blueberry"];

//Wyświetlenie owoców z pętlą foreach z { }
foreach ($fruits as $f) {
    echo $f.PHP_EOL;
}

//Wyświetlenie owoców z pętlą foreach z endforeach
foreach ($fruits as $f):
    echo $f.PHP_EOL;
endforeach

?>