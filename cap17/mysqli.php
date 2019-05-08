<?php

// ====================================================================================================
// Variáveis com os dados de conexão.
// ====================================================================================================
$user   = 'root';
$passwd = 'root';
$host   = 'localhost';
$db     = 'aula_bd';

// ====================================================================================================
// Cria um objeto mysqli que representa a conexão com um servidor MySQL utilizando os dados para
// acesso ao servidor, $host, $user e $passwd e informando a qual banco de dados queremos nos conectar
// $db. O objeto criado é armazenado em $mysqli.
// ====================================================================================================
$mysqli = new mysqli($host, $user, $passwd, $db);

// ====================================================================================================
// Verifica se a conexão com o banco de dados ocorreu sem problemas.
// A propriedade connect_errno do objeto $mysqli armazena o código de erro, caso ocorra algum, caso
// não ocorra algum erro essa propriedade armazena o valor zero (0).
//
// Aviso: Uma string vazia, zero (0) inteiro ou zero em string "0" são considerados false. Logo, na
// instrução if o retorno de connect_errno é zero (false) em seguida negamos, passa para verdadeiro,
// e executamos o primeiro bloco de código.
// Sem isso, o primeiro bloco de código nunca seria executado, mesmo que a conexão fosse criada com
// sucesso, já que a propriedade estaria armazenado zero (0).
// ====================================================================================================
if (! $mysqli->connect_errno) {
    echo "Conexão ativa!";
    echo "<br><br>Valor de connect_errno: ";
    var_dump($mysqli->connect_errno);
} else {
    echo "Erro na conexão!";
    echo "<br><br>Valor de connect_errno: ";
    var_dump($mysqli->connect_errno);
}

