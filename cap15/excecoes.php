<?php

// ====================================================================================================
// Código para exempleficar a geração de exceções e tratamento em PHP.
// ====================================================================================================

function somar_inteiros($n1, $n2)
{
    if (is_integer($n1) && is_integer($n2)) {
        return $n1 + $n2;
    } else {
        throw new Exception("O valor passado por parâmetro não é um inteiro válido!");
    }
}

// ====================================================================================================
// Chama a função e passa dois números inteiros, tudo funciona bem.
// ====================================================================================================
$n = somar_inteiros(10, 20);
echo "<p>O valor da soma: $n</p>";

// ====================================================================================================
// Chama a função e passa apenas um número inteiro, acontece a exceção.
// ====================================================================================================
//$n = somar_inteiros(10, "20");
//echo "<p>O valor da soma: $n</p>";


// ====================================================================================================
// Neste exemplo vamos "capturar" a exceção gerada pelo código da função e ao invés de apresentar
// um erro como o apresentado no segundo exemplo, com detalhes técnicos que o usuário desconhece
// apresentamos uma mensgaem mais polida.
//
// Para isso, utiliza se o boloco try catch.
// O bloco finally sempre será executado, ocorrendo ou não a captura de uma exceção.
// ====================================================================================================
$n = null;
try {
    $n = somar_inteiros(10, "20");
    echo "<p>O valor da soma: $n</p>";
} catch (Exception $ex) {
    echo "<p>Ocorreu um erro.<p>";
    echo "<p>O erro é: " . $ex->getMessage() . "</p>";
} finally {
    if (isset($n)) {
        echo "<p>O valor da soma: $n </p>";
    } else {
        echo "<p>Devido ao erro, o valor de n é nulo.";
    }
}


