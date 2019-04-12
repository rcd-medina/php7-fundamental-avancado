<?php

session_start();
//session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário Sessão</title>
</head>
<body>
    <br> <br>

    <form method="post">
        <table border="0">
            <tr>
                <td>Nome:</td>
                <td> <input type="text" name="nome" /> </td>
            </tr>

            <tr>
                <td>Idade:</td>
                <td> <input type="number" name="idade" /> </td>
            </tr>

            <tr>
                <td>Telefone:</td>
                <td> <input type="text" name="telefone" /> </td>
            </tr>

            <tr>
                <td> <input type="submit" value="Enviar" /> </td>
            </tr>
        </table>
    </form>
    
    <br>
    <hr>

    <?php
        if (count($_POST)) {
            $_SESSION['cadastro'][] = $_POST;
        }

        if (isset($_SESSION['cadastro']) && count($_SESSION['cadastro'])) {
            echo '<table border="0">';

            foreach ($_SESSION['cadastro'] as $values) {
                echo "<tr>";

                foreach ($values as $atr => $value) {
                    echo "<td> <b> $atr </b> </td>";
                    echo "<td> $value </td>";
                }

                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<h4>Não existem dados armazenados na sessão.</h4>";
        }
    ?>

</body>
</html>


