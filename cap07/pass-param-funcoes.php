<?php

$pessoas = [];

function adicionarPessoa($nome, $idade, $cidade)
{
    // ================================================================================================
    // A palavra chave global "puxa" o array $pessoas para dentro da função.
    // ================================================================================================
    global $pessoas;
    $pessoas[] = ["nome" => $nome, "idade" => $idade, "cidade" => $cidade];
}

function adicionarPessoaReferencia(&$pessoas, $nome, $idade, $cidade)
{
    // ================================================================================================
    // & (e comercial) diz que a função receberá por referência o array $pessoas.
    // Ou seja vai trabalhar diretamente com o array.
    // Técnicamente, tem o mesmo efeito do uso da palavra chave global
    // ================================================================================================
    $pessoas[] = ["nome" => $nome, "idade" => $idade, "cidade" => $cidade];
}

// ====================================================================================================
// Imprimir os valores do array.
// ====================================================================================================
function imprimirPessoas($array_pessoas)
{
    echo "<pre>";
    var_dump($array_pessoas);
    echo "</pre>";
}

// ====================================================================================================
// Exemplo de função com retorno de informações.
// ====================================================================================================
function getQuantidadePessoas($pessoas)
{
    // ================================================================================================
    // Retorna, a quem chamou a função, a quantidade de elementos no array.
    // ================================================================================================
    return count($pessoas);
}

// ====================================================================================================
// Função para remover um nome específico do array.
// ====================================================================================================
function removePessoa(&$pessoas, $nome)
{
    // ================================================================================================
    // Função array_column($array_multidimensional, $chave) recebe dois parâmetros, o array que contém
    // os dados, no caso outros arrays, e o segundo parâmetro é a chave de onde devem ser extraídos os
    // os valores, no caso do exemplo seria a chave (coluna) nome.
    // O retorno de array_column() é um array com os valores da coluna mencionada, que será usada pela
    // função array_search(), já estudada anteriormente.
    // ================================================================================================
    $i = array_search($nome, array_column($pessoas, "nome"));

    // ================================================================================================
    // Se o valor de retorno da função array_search() for diferente de um inteiro, já que o array
    // retornado pela função array_column() é indexado, emite a mensagem de que o nome pesquisado
    // não existe no array.
    // ================================================================================================
    if (is_integer($i)) {
        // ============================================================================================
        // Função array_splice() recebe como primeiro parâmetro o array onde ocorrerá a remoção de
        // elemento, como segundo parâmetro o a partir de qual índice e como terceiro parâmetro
        // quantos índices a partir do índice apontado. Neste exemplo apenas remove um elemento, que
        // é o próprio segundo parâmetro.
        // ============================================================================================
        array_splice($pessoas, $i, 1);
    } else {
        echo "<h4>Não existe esse nome</h4>";
    }
}

adicionarPessoa("Marcio de Souza", 56, "João Pessoa");
adicionarPessoa("Maria da Cruz", 40, "Vitória");
adicionarPessoaReferencia($pessoas, "Pedro Vasconcelos", 28, "São Paulo");
adicionarPessoaReferencia($pessoas, "Joselito da Silva", 62, "Santos");

imprimirPessoas($pessoas);

// ====================================================================================================
// getQuantidadePessoas() retorna a quantidade de elementos do array $pessoas e esse retorno será
// armazenado na variável $c para uso posterior.
// ====================================================================================================
$c = getQuantidadePessoas($pessoas);
echo "<h3>Quantidade de Pessoas: $c </h3>";
echo "<h3>Removendo Pessoa... </h3>";

// ====================================================================================================
removePessoa($pessoas, 'Joselito da Silva');

$c = getQuantidadePessoas($pessoas);
echo "<h3>Quantidade de Pessoas: $c </h3>";

imprimirPessoas($pessoas);

