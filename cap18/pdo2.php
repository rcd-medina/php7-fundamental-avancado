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

    $sql = 'SELECT * FROM aluno';

    // ================================================================================================
    // No acesso a banco de dados também existe o método prepare() para preparar as sentenças SQL a
    // serem executadas no banco de dados, assim como o mysqli, e funciona da mesma maneira.
    // 
    // Também poderia ser utilizado $stmt->query(), nesse caso não seria necessário utilizar os dois
    // métodos prepare() e execute().
    //
    // Ex.:
    // $stmt = $pdo->query('SELECT * FROM aluno');
    // ================================================================================================
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // ================================================================================================
    // O método fetch() retorna cada registro encontrado em formato de array indexado por números e
    // também por chaves associativas, sendo que cada chave é o nome da tabela no banco de dados na
    // mesma ordem estrutural da tabela, logo.
    // $row[0] e $row['idaluno'] possuem o mesmo valor, no caso, o id do aluno retornado.
    //
    // Quando não houveram mais registros a serem retornados, será retorno o valor null.
    // ================================================================================================
    while ($row = $stmt->fetch()) {
        echo "<p>ID Aluno: {$row['idaluno']}</p>";
        echo "<p>Nome Aluno: {$row['nome']}</p>";
        echo "<p>Idade Aluno: {$row['idade']}</p>";
        echo "<p>Cidade Aluno: {$row['cidade']}</p>";
        echo "<hr>";
    }
} catch (PDOException $ex) {
    echo "Erro: " . $ex->getMessage();
}

