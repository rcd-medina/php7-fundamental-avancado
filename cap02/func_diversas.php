<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções Diversas do PHP</title>
</head>
<body>

<?php

// ====================================================================================================
// Descobrindo o tipo de dados do valor de uma variável no PHP.
$i = 1;
$b = is_integer($i);        // is_integer() retorna true (o valor é inteiro) ou false (não é inteiro).
echo "b = $b <br>";
echo "Testando inteiro: ";
var_dump(is_integer($i));   // var_dump imprime retorno de is_integer(), porém, serve para qualquer
                            // variável, assim pode ser utilizado para debug do código.

echo ("<br>");
$s = "Texto qualquer";
echo "Testando strings: ";  // Assim como existe o is_integer() para testar uma variável de número
var_dump( is_string($s) );  // inteiro, também temos o is_string() que testa variável de string.
echo ("<br>");

$f = 1.55;
echo "Testando ponto flutuante: ";
var_dump( is_float($f) );           // Testa ponto flutuante.
echo "<br>";

$b = true;
echo "Testando boolean: ";
var_dump( is_bool($b) );    // Testa o tipo boolean.
echo "<br>";

$a = [];
echo "Testa arary: ";
var_dump( is_array($a) );   // Testa se é um array.
echo "<br>";

echo "Testando isset(): ";
var_dump( isset($var) );    // isset() verifica se uma variável foi criada/setada com algum valor.
echo "<br>";

echo "Testando isset(): ";
var_dump( isset($b) );      // isset() verifica se uma variável foi criada/setada com algum valor.
echo "<br>";
?>
</body>
</html>