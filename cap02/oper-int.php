<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operações com Número Inteiros</title>
</head>
<body>

<?php

//
// Atribui um valor inteiro à uma variável.
$i = 100;

// $soma recebe o valor de $i + 100.
$soma = $i + 100;

// $sub recebe o valor de $i - 50;
$sub = $i - 50;

// $mul recebe o valor de $i multiplicado (*) por 5.
$mul = $i * 5;

// $div recebe a divisão de $i po 5;
$div = $i / 5;

// $resto recebe o resto da divisão de $i % 3.
$resto = $i % 3;

// Imprime o resultado.
printf("<p>soma=%d, sub=%d, mul=%d, div=%d, resto=%d</p>", $soma, $sub, $mul, $div, $resto);

//
// Atribui 1 à variável e imcrementa o valor em 1, sem seguida incrementa novamente
// mas com o operador ++ após o nome da variável.
$i = 1;
$i = $i + 1;
$i++;

printf("<p>i=%d</p>", $i);

//
// Outra forma de incrementar utilizando o operador ++ antes do nome da variável.
// A diferença entre usar o ++ depois e antes do nome da variável é a seguinte:
// Quando $i++, o PHP primeiro lê (utiliza) o valor de $i e somente depois incrementa.
// quando ++$i, o PHP primeiro incrementa o valor de $i e depois lê (utiliza)
$i = 1;
printf("<p>i = %d</p>", ++$i);


?>
</body>
</html>