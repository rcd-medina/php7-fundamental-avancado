<?php

$a = false;
if ($a == true)
    echo "<p>a é verdadeiro</p>";
else
    echo "<p>a não é verdadeiro</p>";


$a = 3;
if ($a == 1) {
    echo "<p>a igual a 1</p>";
}
elseif ($a == 2) {
    echo "<p>a igual a 2</p>";
}
elseif ($a == 3) {
    echo "<p>a igual a 3</p>";
}
else {
    echo "<p>a igual a não sei</p>";
}

//
//
if (is_integer($a) && $a === 3) {
    echo "<p>a: integer e a:3</p>";
}


//
// Se a é igual a zero, será entendido como false, qualquer valor positivo ou negativo
// será entendido como true
$a = 1;
if ($a) {
    echo "<p>entrei no if</p>";
}

//
//
$a = 3;
$b = 0;
if ($a == 3)
    $b = 30;
else
    $b = 40;
echo "<p>b = $b</p>";

//
// Operador ternário.
$b = ($a == 3) ? 30 : 40;
echo "<p>b = $b</p>";
