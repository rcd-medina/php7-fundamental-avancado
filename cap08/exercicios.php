<?php

// ====================================================================================================
// Objetivo do Exercício:
//
// Implementar uma função que receba por parâmetro um array abaixo e forneça a saída:
// Nome:
// Idade:
// Pai
// Endreço:
// Telefone:
// ====================================================================================================
$pessoas['joao']['idade']    = 20;
$pessoas['joao']['pai']      = 'Joaquim da Silva';
$pessoas['joao']['endereco'] = 'Rua Cascavel, 450';
$pessoas['joao']['telefone'] = '3000-3000';

$pessoas['mara']['idade']    = 23;
$pessoas['mara']['pai']      = 'José de Souza';
$pessoas['mara']['endereco'] = 'Rua Argentina, 120';
$pessoas['mara']['telefone'] = '1010-0011';


// ====================================================================================================
// Definição da função.
// ====================================================================================================
function imprimeInfo($dados)
{
    echo "<h2>Exercício 1</h2>";
    foreach ($dados as $key => $value) {
        echo "Nome: " . ucwords($key) . "<br>";
        echo "Idade: " . $value['idade'] . "<br>";
        echo "Pai: " . $value['pai'] . "<br>";
        echo "Endereço: " . $value['endereco'] . "<br>";
        echo "Telefone: " . $value['telefone'] . "<br><br><br>";
    }

    echo "<hr><br>";
}

// ====================================================================================================
// Definição da função, versão 2.
// ====================================================================================================
function imprimeInfo2($dados)
{
    foreach ($dados as $key => $values) {
        echo "Nome: " . ucwords($key) . "<br>";
        foreach ($values as $key => $value) {
            echo ucwords($key) . ": " . $value . "<br>";
        }
        echo "<br><br>";
    }
}

// ====================================================================================================
// Chamada à função.
// ====================================================================================================
imprimeInfo($pessoas);
imprimeInfo2($pessoas);
