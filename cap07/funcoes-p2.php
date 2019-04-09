<?php

// ====================================================================================================
// $pessoas[] é uma variável global no momento.
//
// ====================================================================================================
$pessoas = [];

// ====================================================================================================
// Adiciona um array com as informações nome, idade e cidade no array $pessoas[].
// ====================================================================================================
function adicionarPessoa($nome, $idade, $cidade)
{
    // ================================================================================================
    // Embora pareça que o PHP esteja fazendo uso da variável global $pessoas, na verdade o PHP está
    // criando uma nova variável dentro do escopo da função.
    // Para "puxar" a variável global $pessoas[] para dentro da função, devemos usar a palavra chave
    // global antes do nome da variável.
    // ================================================================================================
    global $pessoas;
    $pessoas[] = ['nome' => $nome, 'idade' => $idade, 'cidade' => $cidade];
    echo "<pre>";
    print_r($pessoas);
    echo "</pre>";
}

// ====================================================================================================
// chamada à função adicionarPessoa().
// ====================================================================================================
adicionarPessoa("Ricardo Almeida", 32, "São Paulo");
adicionarPessoa("Luiza Santos", 25, "Santos");
adicionarPessoa("Paulo Guerra", 30, "Marilia");

// ====================================================================================================
// Adiciona um array com as informações nome, idade e cidade no array global $pessoas[].
// Este está declarado no começo deste código. Desta vez não será usada a palavra chave global para
// "puxar" o array para dentro da função, agora o array será passado como referência para a função.
// ====================================================================================================
function adicionarPessoaReferencia(&$array_pessoas, $nome, $idade, $cidade)
{
    $array_pessoas[] = ['nome' => $nome, 'idade' => $idade, 'cidade' => $cidade];
}

adicionarPessoaReferencia($pessoas, "João da Silva", 65, "São José");
adicionarPessoaReferencia($pessoas, "Aldo Rodrigues", 40, "Ouro Preto");

echo "<br><br><br>";
echo "<pre>";
print_r($pessoas);
echo "</pre>";
