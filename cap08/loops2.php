<?php

// ====================================================================================================
// Iterando por um array com o laço for.
// ====================================================================================================
echo "<h3>Iterando por um array com o laço for.</h3>";
$a = [10, 20, 30, 40, 50];
for ($i = 0; $i < count($a); $i++) {
    echo "<p>a[$i] = " . $a[$i] . "</p>";
}

// ====================================================================================================
// Iterando por um array com o laço while.
// ====================================================================================================
echo "<h3>Iterando por um array com o laço while.</h3>";
$a = [10, 20, 30, 40, 50];
$i = 0;
while ($i < count($a)) {
    echo "<p>a[$i] = " . $a[$i] . "</p>";
    $i++;
}

// ====================================================================================================
// Iterando por um array com o laço foreach.
// ====================================================================================================
echo "<h3>Iterando por um array com o laço foreach.</h3>";
$a = [10, 20, 30, 40, 50];
foreach ($a as $elemento) {
    echo "<p>Elemento = " . $elemento . "</p>";
}


// ====================================================================================================
// Iterando por um array com o laço foreach, desta vez recuperando o índice e o elemento.
// ====================================================================================================
echo "<h3>Iterando por um array com o laço foreach (recuperando índice e elemento).</h3>";
foreach ($a as $indice => $elemento) {
    echo "<p>a[$indice] = " . $elemento . "</p>";
}


// ====================================================================================================
// Iterando por um array multidimensional com o laço foreach.
//
// O primeiro foreach() itera um array multidimensional.
// Cada elemento do array multidimensional é um array unidimensional, logo, basta iterar
// o elemento recuperado com outro foreach(), mas desta vez interno.
// ====================================================================================================
$produtos[] = ["nome" => "Computador", "preco" => 1500];
$produtos[] = ["nome" => "Smartphone", "preco" => 1800];
echo "<h3>Iterando por um array multidimensional com o laço foreach (recuperando índice e elemento).</h3>";
foreach ($produtos as $value) {
    echo "<hr>";
    foreach ($value as $key => $value) {
        echo "<p>$key = $value</p>";
    }
}

