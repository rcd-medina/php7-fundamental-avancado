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
    // Array contendo registros a serem inseridos no banco de dados, sendo que cada registro é um
    // array associativo.
    // ================================================================================================
    $alunos = [
        ['nome' => 'Maria', 'idade' => 26, 'cidade' => 'Natal'],
        ['nome' => 'Edgar', 'idade' => 33, 'cidade' => 'João Pessoa'],
        ['nome' => 'Joselito', 'idade' => 19, 'cidade' => 'Paulinia'],
        ['nome' => 'Claudio', 'idade' => 36, 'cidade' => 'Lorena']
    ];

    // ================================================================================================
    // Sentença SQL indicando quais campos serão utilizados e declaração dos parâmetros :nome, :idade
    // $cidade, que serão substituídos pelos dados.
    // ================================================================================================
    $sql = "INSERT INTO aluno (nome, idade, cidade) VALUES (:nome, :idade, :cidade)";
    $stmt = $pdo->prepare($sql);

    // ================================================================================================
    // Executa a leitura do array contendo os demais arrays com os dados e em seguida realiza uma
    // chamada, a cada iteração, para que seja realizada a execução do insert no banco de dados.
    // ================================================================================================
    foreach ($alunos as $a) {
        $stmt->execute($a);
    }
    
} catch (PDOException $ex) {
    echo "Erro: " . $ex->getMessage();
}

