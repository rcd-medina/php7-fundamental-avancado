<?php

// Funções anônimas.

// ====================================================================================================
// A variável $minhaFuncao recebe uma função, não o retorno da função.
// ====================================================================================================
$minhaFuncao = function($nome)
{
    echo "<h1>Nome: $nome</h1>";
};

// ====================================================================================================
// Chamada à função que foi atribuída na variável $minhaFuncao.
// ====================================================================================================
$minhaFuncao("José");
$minhaFuncao("Aldo");


// ====================================================================================================
// Função que chama uma função anônima armazenada na variável $minhaFuncao.
// ====================================================================================================
function executarFuncao($parametro, $funcao)
{
    $funcao($parametro);
}

executarFuncao("Mariana", $minhaFuncao);

// ====================================================================================================
// Função que executa uma função anônima.
// ====================================================================================================
executarFuncao("Chama função anônima", function($nome)
    {
        echo "<h1>Função anônima: $nome</h1>";
    }
);

// ====================================================================================================
// Parâmetros padrão.
// Sempre que a função for chamada e não receber nenhum valor para o parâmetro, será assumido o valor
// padrão declarado na função.
// Todos os parâmetros que recebem um valor padrão devem ficar do lado direito (final) para evitar
// ambiguidades no momento da chamada à função.
// ====================================================================================================
function teste($parametro = "Padrão 1", $parametro2 = "Padrão 2")
{
    echo "<h4>Parâmetro 1 = $parametro</h4>";
    echo "<h4>Parâmetro 2 = $parametro2</h4>";
}

teste();
teste("Fernando", "Souza");

