<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays - Parte 02</title>
</head>
<body>

<?php

//
// array_slice() ==> Recupera uma determinada parte do array.
// No exmeplo, a função recupera a partir do índice (posição) 5 até o final.
// Ou seja, será criado um novo array com os valores, 60, 70, 80, 90, 100.
$a1 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$r  = array_slice($a1, 5);
echo "<br><br>";
var_dump($r);

//
// array_slice() ==> Recupera uma determinada parte do array.
// Neste exemplo, vamos recuperar a partir do índice (posição) 2 apenas 5 elementos.
// Ou seja, será criado um novo array com o valores, 30, 40, 50, 60, 70.
$a1 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$r  = array_slice($a1, 2, 5);
echo "<br><br>";
var_dump($r);

//
// in_array() ==> Verifica se um elemento existe no array, se sim, retorna true, se não false.
$a1 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$b  = in_array(40, $a1);
echo "<br><br>";
echo "b = ";
var_dump($b);

//
// end() ==> Busca o última elemento (valor) do array.
$ultimo = end($a1);
echo "<br><br>";
echo "b = $ultimo";

?>

</body>
</html>