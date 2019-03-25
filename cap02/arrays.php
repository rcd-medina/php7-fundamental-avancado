<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exmeplos com arrays</title>
</head>
<body>

<?php

//
// Declara um array unidimensional.
$meuArray = [];

//
//Imprime o conteúdo do array, neste momento ainda vazio.
echo "Array vazio: <br>";
var_dump($meuArray);
echo "<br><br>";

//
// Preenche o array com alguns valores.
// Temos 7 elementos no array, sendo que esses elementos ocupam 6 posições no array.
echo "Array preenchido com valores: ";
$meuArray = [10, 20, 30, 40, 55, 66, 12];
echo "<br>";

var_dump($meuArray);
echo "<br><br>";

//
// Outra maneira de imprimir informações de um array.
// print_r() é uma função específica para impressão de arrays.
echo "Impressão de informações de arrays com a função print_r(): <br>";
print_r($meuArray);

echo "<br><br>";

//
// Outra maneira de declarar um array, agora com a função array();
$meuArray2 = array( 1, 2, 3, 4, 5, 6, 7);
echo "Exemplo com a função array(): <br>";
print_r($meuArray2);

echo "<br><br>";
echo "<br><br>";

//
// ===============================================================================================================

//
// Acessando os elementos (valores) de um array.
echo "Valor na primeira posição do array: " . $meuArray[0] . "<br>";
echo "Valor na segunda posição do array: " . $meuArray[1] . "<br>";
echo "Valor na terceira posição do array: " . $meuArray[2] . "<br><br><br>";


//
// ===============================================================================================================

//
// Exemplo de como preencher um array.
// Obs.: Os arrays em PHP podem conter elementos (valores) de diferentes tipos ao mesmo tempo.
$a = [];            //Declara um array.
$a[] = 100;         //Adiciona o primeiro elemento.
$a[] = 200;         //Adiciona o segundo elemento.
$a[] = 300;         // idem
$a[] = 400;         // idem
$a[] = 500;         // idem
$a[] = "Seiscentos";
$a[] = "Setescentos";
$a[] = "Oitoscentos";
$a[] = 99.9;
$a[] = true;

echo "Valores do array: <br>";
print_r($a);

echo "<br><br>";

//
// ===============================================================================================================
// Declaração de array associativo.
echo "Arrays associativo: <br>";
$b[0] = 'zero';
$b['1'] = 1;
$b['b'] = 'letra b';
$b['letra c'] = 'letra c';
var_dump($b);

echo "<br><br>";

//
// ===============================================================================================================
// Exemplos de array multidimensionais.
echo "Array multidimensional: ";

$m = [];
$m[0] = [ 1, 2, 3];
$m[1] = [0 => 10, 1 => 20, 2 => 30];
$m[2] = ['letra a' => 'A', 'letra b' => 'B'];
echo "<pre>";
print_r($m);
echo "</pre>";

echo "<br><br>";

echo "<h2>Pessoas:</h2>";
$pessoas['joao'] = ['idade' => 20, 'pai' => 'joaquim', 'cidade' => 'Sao Paulo'];

//
// ===============================================================================================================
// Outra forma de declarar e preencher um array multidimensional.
$pessoas['patricia']['idade'] = 35;
$pessoas['patricia']['pai'] = 'Jose';
$pessoas['patricia']['cidade'] = 'Poá';

echo "<pre>";
print_r($pessoas);
echo "</pre>";

echo "<br><br>";

//
// ===============================================================================================================
// Acessando elementos em arrays multidimensionais.
echo "Idade da Patrícia: " . $pessoas['patricia']['idade'];
echo "<br><br>";


//
// ===============================================================================================================
// Funções para trabalhar com arrays.
$x = [1, 2, 3, 4, 5, 6, 7];

echo "Número de elementos de x: " . count($x) . "<br>";
echo "Número de elementos de pessoas: " . count($pessoas) . "<br>";
echo "Número de elementos de pessoas[patricia]: " . count($pessoas['patricia']) . "<br>";
?>

</body>
</html>