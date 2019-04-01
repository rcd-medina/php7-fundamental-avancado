<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operações Lógicas</title>
</head>
<body>

<?php

//
// Operações com tipos lógicos no PHP.
//

//
// O valor true (verdadeiro) no PHP é representado pelo valor 1.
// Enquanto que false (falso) é representando por "vazio".
// Ex.
$a = true;
$b = false;
echo "<br> a = "; var_dump($a);
echo "<br> b = "; var_dump($b);

//
// Operação E (&&).
// Se $a E $b são verdadeiros, então $r recebe o valor verdadeiro, se não, recebe falso.
$r = $a && $b;
echo "<br> a E b = "; var_dump($r);

//
// Operação E (&&).
// Se $a E $a são verdadeiros, então $r recebe o valor verdadeiro, se não, recebe falso.
$r = $a && $a;
echo "<br> a E a = "; var_dump($r);

//
// Operação E (&&).
// Se $a E $a são verdadeiros, então $r recebe o valor verdadeiro, se não, recebe falso.
$r = $b && $b;
echo "<br> b E b = "; var_dump($r);

//
// Operação OR (||).
// Operador OR (||) verifica se um dos operandos ($a OU $b) é verdadeiro.
// Caso um deles seja, o retorno é verdadeiro.
$r = $a || $b;
echo "<br> a OU b = "; var_dump($r);

//
// Operação OR (||).
$r = $a || $a;
echo "<br> a OU a = "; var_dump($r);

//
// Operação OR (||).
$r = $b || $b;
echo "<br> b OU b = "; var_dump($r);


//
// Operação ! (negação).
// Operador ! (negação) inverte o valor lógico.
// $a for true, !$a inverte para false
$r = !$a;
echo "<br> !a = "; var_dump($r);

// $b for false, !$b inverte para true
$r = !$b;
echo "<br> !b = "; var_dump($r);

//
// Operação ! (negação).
// Operador ! (negação) inverte o valor lógico.
// Negando o resultado de uma operação.
$r = ! ($a || $b);
echo "<br> ! (a || b) = "; var_dump($r);

echo "<br> <hr> <br>";

//
// Comparações.
$n1 = 10;
$n2 = 20;

//
// Se n1 > (MAIOR) que 5, então o resultado é true e armazenado em $r.
$r = $n1 > 5;
echo "<br> n1 > 5 = "; var_dump($r);

// Se n1 > (MAIOR) que n2, então o resultado é true, se não false e armazena em $r.
$r = $n1 > $n2;
echo "<br> n1 > n2 = "; var_dump($r);

// Se n1 < (MENOR) que 5, então o resultado é true e armazenado em $r.
$r = $n1 < 5;
echo "<br> n1 < 5 = "; var_dump($r);

// Se n1 < (MENOR) que 10, então o resultado é true e armazenado em $r.
$r = $n1 < 10;
echo "<br> n1 < 10 = "; var_dump($r);

// Se n1 <= (MENOR OU IGUAL) a 10, então o resultado é true e armazenado em $r.
$r = $n1 <= 10;
echo "<br> n1 <= 10 = "; var_dump($r);

// Se n1 >= (MIOR OU IGUAL) a 10, então o resultado é true e armazenado em $r.
$r = $n1 >= 10;
echo "<br> n1 >= 10 = "; var_dump($r);

// Se n1 == (IGUAL) a 10, então o resultado é true e armazenado em $r.
$r = $n1 == 10;
echo "<br> n1 == 10 = "; var_dump($r);

// Se n1 != (DIFERENTE) a 20, então o resultado é true e armazenado em $r.
$r = $n1 != 20;
echo "<br> n1 != 20 = "; var_dump($r);

// Se n1 != (DIFERENTE) a 10, então o resultado é true e armazenado em $r.
$r = $n1 != 10;
echo "<br> n1 != 10 = "; var_dump($r);

echo "<br> <hr> <br>";

//
// Utilizando funções que verificam os tipos de valores.
$s = "10";
$n = 10;
$r = is_integer($n) && is_string($s);
echo "<br> n1 (integer) && s (string) = "; var_dump($r);

//
// Sinal == (igualdade) compara os valores, ignirando os tipos.
// Neste compara se $s (string) com $n (integer), são de tipos diferentes, mas com os
// valores, no caso são 10.
$s = "10";
$n = 10;
$r = $s == $n;
echo "<br> s == n = "; var_dump($r);

//
// Sinal === (identidade) compara os valores levando em conta os tipos.
// Neste compara se $s (string) com $n (integer), são de tipos diferentes, mas com os
// valores, no caso são 10.
$s = "10";
$n = 10;
$r = $s === $n;
echo "<br> s == n = "; var_dump($r);

?>

</body>
</html>

