<?php


// ====================================================================================================
// Aula:
//          PDO - Introdução.
// ====================================================================================================
// Exemplo de criação de conexão com banco de dados.
// As variáveis a seguir armazenam os dados necessários para a conexão com o banco de dados, como a
// localização do banco de dados (host = localhost), o usuário de acesso ao servidor de banco de dados
// (user = root), a senha, o qual banco de dados será acessado e a codificação de caracteres.
// ====================================================================================================
$host = 'localhost';
$user = 'root';
$passwd = '';
$dbname = 'aula_bd';
$charset = 'utf8';

// ====================================================================================================
// Criação da strging de conexão com o banco de dados.
// ====================================================================================================
$dsn = "mysql:host=$host; dbname=$dbname; charset=$charset";

// ====================================================================================================
// Tentativa de instanciação de um objeto PDO para conectar se ao banco de dados, passando a string de
// de conexão com o nome de usuário de acesso e senha.
// ====================================================================================================
try {
    $pdo = new PDO($dsn, $user, $passwd);
    echo "<p>Conectado ao banco de dados: $dbname</p>";
    echo "<br>";

    // =================================================================================================
    // Sentença SQL para recuperar o nome do aluno que tenha o idaluno = 10, que foi passado para o
    // método execute() como parâmetro dentro de um array indexado.
    // Em seguida instruímos o objeto $stmt a retornar apenas uma única coluna, no caso, a coluna nome.
    // =================================================================================================
    $sql = "SELECT nome FROM aluno WHERE idaluno = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([10]);
    $nome = $stmt->fetchColumn();
    echo "<p>Nome: {$nome}</p>";

    // =================================================================================================
    // Sentença SQL para retornar a quantidade de registros que estão na tabela aluno.
    // Desta vez como não há a necessidade passagem de parâmetros, utiliza se somente o método query()
    // que também retorna um objeto PDOStatement.
    // =================================================================================================
    $count = $pdo->query("SELECT COUNT(*) FROM aluno")->fetchColumn();
    echo "Quantidade de alunos: {$count}";
} catch (PDOException $ex) {
    echo "Erro: " . $ex->getMessage();
}

