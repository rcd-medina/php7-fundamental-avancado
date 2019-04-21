<?php


$pessoa['nome']   = "Rubens Antonio da Silva";
$pessoa['idade']  = 47;
$pessoa['cidade'] = "Joao Pessoa";
$pessoa['numeros'] = [10, 20, 30, 40, 50];

$s = json_encode($pessoa);
print $s . "<br>";

$pessoas[] = ['nome' => 'Felipe de Souza', 'idade' => 26];
$pessoas[] = ['nome' => 'Fernanda Lima', 'idade' => 22];
$pessoas[] = ['nome' => 'Cassio Guimaraes', 'idade' => 48];

$gentes = json_encode($pessoas);
print $gentes . "<br><br>";

//
// Recupera os dados de uma estrutura no padrão json.
$array_pessoas = json_decode($gentes);
var_dump($array_pessoas);

?>


