<?php


session_start();

if (count($_POST)) {
    var_dump($_POST);
    $_SESSION['cadastropessoal'][] = $_POST;
}

header('Location: listar.php');

?>