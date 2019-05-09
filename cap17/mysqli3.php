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

    // ================================================================================================
    // Cria se uma instrução INSERT SQL a ser executada no banco de dados.
    // ================================================================================================
    //
    // $sql = "INSERT INTO aluno (nome, idade, cidade) VALUES ('Rodrigo', 46, 'Barueri')";
    //

    // ================================================================================================
    // Cria se uma instrução UPDATE SQL a ser executada no banco de dados.
    // ================================================================================================
    //
    // $sql = "UPDATE aluno SET idade = idade + 1 WHERE idaluno = 7";
    //

    // ================================================================================================
    // Após a criação da sentença SQL, a executamos efetivamente através do método query() do objeto
    // $mysqli. Se tudo ocorrer bem, o método retorna TRUE, caso contrário, FALSE, por isso o teste
    // dentro do if.
    //
    // Obs.: Caso sejam passadas sentenças SQL do tipo SELECT, SHOW, DESCRIBE ou EXPLAIN, o método irá
    // retornar um objeto do tipo mysqli_result com os dados retornados pela sentença.
    // ================================================================================================
    //
    // if ($mysqli->query($sql)) {
    //    echo "<p>Registro inserido com sucesso!</p>";
    // }
    //

    //
    // if ($mysqli->query($sql)) {
    //    echo "<p>Registro alterado com sucesso!</p>";
    // }
    //

    // ================================================================================================
    // LEMBRANDO:
    // Quando executamos uma sentença SQL que retorna linhas de dados (registros), o método query irá
    // retornar um objeto do tipo mysqli_result contendo os registros.
    // Para recuperar os registros precisamos chamar os métodos apropriados deste objeto.
    // ================================================================================================
    $sql = "SELECT * FROM aluno";
    $res = $mysqli->query($sql);

    if (isset($sql)) {
        /*echo "<pre>";
        print_r($res);
        echo "</pre>";*/
        // ============================================================================================
        // Após o resultado ser armazenado na variável $res, será utilizado o método fetch_assoc() para
        // recuperar cada registro encontrado no banco de dados.
        //
        // O laço while(), aqui apresentando, funcionará da seguinte maneira: O método fetch_assoc()
        // do objeto $res (mysqli_result) retornará cada registro, em forma de um array associativo, e
        // esse array será armazenado na variável $row (linha). Quando o método fetch_assoc() chegar
        // ao fim, ou seja, ler todos os registros, ele retornará o valor null para a variável $row,
        // nesse momento o laço será finalizado.
        //
        // Já que cada registro (linha) é retornado como um array, basta acessar o valor de cada
        // coluna através do nome da caluna, já que o método fetch_assoc() retorna um array associativo
        // sendo que cada chave é o nome da coluna da tabela, na mesma ordem, e o valor é o dados.
        //
        // Ex.: $row['idaluno'], $row['nome'], e assim por diante.
        // ============================================================================================
        echoTableHead();
        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['idaluno'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['idade'] . "</td>";
            echo "<td>" . $row['cidade'] . "</td>";
        }
        echoTableFoot();
    }

} else {
    echo "Erro na conexão!";
    echo "<br><br>Valor de connect_errno: ";
    var_dump($mysqli->connect_errno);
}

