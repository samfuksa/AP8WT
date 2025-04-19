<?php

echo "Ahoj, světe!<br>";


echo "<br>";


echo 222;
echo "<br>";

$name = "eda";

echo "Ahoj kamarade " .$name;
echo "<br>";


$vek = 20;

if ($vek> 24) {
    echo "Jsi starší než 24 let";
} else {
    echo "Jsi mladší než 24 let";
}
echo "<br>";echo "<br>";

function myfunc ($jmeno) {
    echo "Ahoj " . $jmeno;
}


myfunc("Sam");
