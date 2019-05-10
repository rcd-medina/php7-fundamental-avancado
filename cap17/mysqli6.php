<?php

// ====================================================================================================
// Funções para auxiliar na exemplificação dos códigos.
// ====================================================================================================
function echoTableHead()
{
    echo "<br>";
    echo "<table border=\"1\">";
    echo "<tr>";
    echo "<td>ID Aluno: </td>";
    echo "<td>Nome: </td>";
    echo "<td>Idade: </td>";
    echo "<td>Cidade: </td>";
    echo "</tr>";
}

function echoTableFoot()
{
    echo "</table>";
    echo "<hr>";
    echo "<br>";
}

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
    echo "<br><br>";
    echo "Valor de connect_errno: ";
    var_dump($mysqli->connect_errno);
    echo "<br><br>";

    // ============================================================================================
    // Sentença SQL para execução de um INSERT na tabela.
    // Em seguida prepara a sentença SQL para ser executada, lembrando que todos os pontos de ?
    // interrogação serão trocados quando o método bind_param do objeto $stmt for chamados.
    // ============================================================================================
    $sql = "INSERT INTO aluno (nome, idade, cidade) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    
    // ============================================================================================
    // Primeiro verifica se o objeto $stmt não é nullo.
    // Em seguida utiliza se o método bind_param() para vincular os valores com o tipo de dado
    // a ser utilizado para cada campo ? (interrogação) na sentença SQL, neste exemplo seria isso:
    // string (s) para nome, integer (i) para idade e string (s) para cidade, logo, sis.
    // ============================================================================================
    if (isset($stmt)) {
        $stmt->bind_param('sis', $nome, $idade, $cidade);

        // ========================================================================================
        // Definição dos valores das variáveis.
        // Por fim executa a sentença SQL no banco de dados com uma chamada ao método execute().
        // ========================================================================================
        $nome = "Fabio Machado";
        $idade = 22;
        $cidade = "Indaiatuba";
        $stmt->execute();

        $nome = "Ana Conceição";
        $idade = 21;
        $cidade = "Ferraz de Vasconcellos";
        $stmt->execute();

        $nome = "Fátima Bernardes";
        $idade = 54;
        $cidade = "São Paulo";
        $stmt->execute();
    }

} else {
    echo "Erro na conexão!";
    echo "<br><br>Valor de connect_errno: ";
    var_dump($mysqli->connect_errno);
}

