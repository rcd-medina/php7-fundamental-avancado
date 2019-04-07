<?php

//
// Quando o formulário HTML envia os dados via método GET, o PHP recebe esses dados na
// variável especial $_GET.

// Verifica os dados enviados no método GET do formulários.
// print_r($_GET);


//
// Quando o formulário HTML envia os dados via método POST, o PHP recebe esses dados na
// variável especial $_POST.

// Verifica os dados enviados no método POST do formulários.
print_r($_POST);

//
// Recupera o array em outra variável.
$dados = $_POST;

echo "<p>Nome: "     . $dados['nome'] . "</p>";
echo "<p>Idade: "    . $dados['idade'] . "</p>";
echo "<p>Cidade: "   . $dados['cidade'] . "</p>";
echo "<p>Endereço: " . $dados['endereco'] . "</p>";


//
// Verifica se há dados nos arrays $_GET e $_POST.
echo '<p>count($_GET) = '  . count($_GET)  . '</p>';
echo '<p>count($_POST) = ' . count($_POST) . '</p>';
