<?php

// ====================================================================================================
// Biblioteca com uma uma função, poderia ter muitas outras sem problema.
// ====================================================================================================

function adicionarPessoaReferencia(&$array_pessoas, $nome, $idade, $cidade)
{
    $array_pessoas[] = ['nome' => $nome, 'idade' => $idade, 'cidade' => $cidade];
}

