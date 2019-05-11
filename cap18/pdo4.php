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

    // ================================================================================================
    // Primeiro, cria se a sentença SQL com um parâmetro ? (interrogação), que será substituído logo
    // em seguida. Quando o método execute() é chamado para executar a sentença SQL, passa se um array
    // contendo o valor (dado) que será utilizado no lugar da ? (interrogação).
    // Naturalmente esse valor pode ser conseguido de outra maneira, e não ser escrito diretamente no
    // código, e em seguida passado como parâmetro dentro de um array.
    // ================================================================================================
    echo "<h1>Imprimindo dados</h1>";
    $sql = "SELECT * FROM aluno WHERE nome = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['Maria']);

    echo '<h3>Passando parâmetros para $stmt->execute([\'Maria\'])</h3>';
    echo '<h5>Sentença SQL => "SELECT * FROM aluno WHERE nome = ?"</h5>';

    while ($row = $stmt->fetch()) {
        echo "<p>ID Aluno: {$row['idaluno']}";
        echo "<p>Nome Aluno: {$row['nome']}";
        echo "<p>Idade Aluno: {$row['idade']}";
        echo "<p>Cidade Aluno: {$row['cidade']}";
        echo "<hr>";
    }

    // ================================================================================================
    // Outro exemplo, agora com parâmetro nomeado.
    // Na sentença SQL, ele sempre é precedido por : (dois pontos) e o nome, ex.: :nomealuno.
    // Quando ocorre a chamada ao método execute(), devemos passar um array associativo, onde a chave
    // pode ser o nome do parâmetro sem os : (dois pontos), ou com, e o valor a ser buscado.
    //
    // Também pode ser utilizado em sentenças INSERT, DELETE E UPDATE.
    // ================================================================================================
    $sql = "SELECT * FROM aluno WHERE nome = :nomealuno";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nomealuno' => 'Maria']);

    echo '<h3>Passando parâmetros para $stmt->execute([\'nomealuno\' => \'Maria\'])</h3>';
    echo '<h5>Sentença SQL => "SELECT * FROM aluno WHERE nome = :nomealuno"</h5>';

    while ($row = $stmt->fetch()) {
        echo "<p>ID Aluno: {$row['idaluno']}";
        echo "<p>Nome Aluno: {$row['nome']}";
        echo "<p>Idade Aluno: {$row['idade']}";
        echo "<p>Cidade Aluno: {$row['cidade']}";
        echo "<hr>";
    }
    
} catch (PDOException $ex) {
    echo "Erro: " . $ex->getMessage();
}

