<?php

$a = 10;
$c = 20;

function trocaValor( &$b) {

    $b += 50;

    $c = 6;

    $b /= 6;
    
    return $b;

}

echo trocaValor($a);

echo "<br>";

echo $a;

?>