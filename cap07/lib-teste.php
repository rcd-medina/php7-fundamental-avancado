<?php

// ====================================================================================================
// Insere uma biblioteca no "fluxo atual", ou seja, o código da biblioteca fica disponível aqui
// para ser utilizado quando necessário.
//
// No lugar do include pode ser utilizado também:
// include_once()
// require()
// require_once()
//
// A diferença entre include e require está na maneira de trabalhar.
// Quando include não encontra um arquivo, é emitido apenas um aviso sobre o ocorrido.
// Quando require não encontra um arquivo, ocorre um erro fatal, parando a execução de todo o código.
// ====================================================================================================
include("lib.php");

//
//
$pessoas = [];

adicionarPessoaReferencia($pessoas, "Robson Souza", 25, "Natal");
adicionarPessoaReferencia($pessoas, "Leticia de Almeida", 31, "São Paulo");
adicionarPessoaReferencia($pessoas, "Ana Santos", 28, "Mogi");

echo "<br><br><br>";
echo "<pre>";
print_r($pessoas);
echo "</pre>";
