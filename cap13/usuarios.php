
<?php

    $arquivoUsuario = 'usuarios.json';

    if (count($_POST)) {
        $usuario  = $_POST;
        $usuarios = [];

        if (file_exists($arquivoUsuario)) {
            $usuarios = json_decode(file_get_contents($arquivoUsuario), true);
        }

        $usuarios[] = $usuario;
        file_put_contents($arquivoUsuario, json_encode($usuarios));
    }

    $usuarios = array();
    if (file_exists($arquivoUsuario)) {
        $usuarios = json_decode(file_get_contents($arquivoUsuario), true);
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/materialize_v0.100.2.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <style>
        body: {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main: {
            flex: 1 0 auto;
        }
    </style>

    <title>Fotolog</title>
</head>
<body>
    
    <nav class="cyan">
        <div class="nav-wrapper">
            <a class="center brand-logo" href="#">Projeto Fotolog</a>
            <ul class="left hide-on-med-and-down" id="nav-mobile">
                <li><a href="postagem.php">Nova Postagem</a></li>
                <li class="active"><a href="usuarios.php">Usuários</a></li>
                <li><a href="fotolog.php">Fotos</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <div class="col s8 offset-s2">
                    <div class="card grey lighten-5">
                        <div class="card-content">
                            <span class="card-title">Cadastre um Novo Usuário</span>
                            <br>

                            <?php
                                if (count($usuarios)) {
                                    echo '<ul class="collection">';

                                    foreach ($usuarios as $u) {
                                        echo '<li class="collection-item-avatar">';
                                        echo '<i class="material-icons circle">account_circle</i>';
                                        echo '<span class="title">' . $u['nome'] . '</span>';
                                        echo '<p>' . $u['email'] . '<br></p>';
                                        echo '<a class="secondary-content" href="http://"><i class="material-icons">grade</i></a>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                            ?>

                                    <div class="row">
                                        <div class="col s10 offset-s1">
                                            <div class="card blue">
                                                <span class="white-text">
                                                    <p>Você não possui um usuário cadastrado</p>
                                                    <p>Cadastre um novo usuário para utilizar o Fotolog</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                        </div>

                        <div class="card-action">
                            <form class="container" method="post">
                                <div class="row">
                                    <div class="input-filed col s6">
                                        <label for="nome">Nome</label>
                                        <input class="validate" type="text" name="nome" id="nome" placeholder="Nome ou Apelido">
                                    </div>

                                    <div class="input-filed col s6">
                                        <label for="nome">E-mail</label>
                                        <input class="validate" type="email" name="email" id="email" placeholder="email@dominio">
                                    </div>

                                    <div class="col s12 right-align">
                                        <button class="btn waves-effect waves-light" type="submit">Cadastrar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer cyan grey-text darken-2-text">

    <!--
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Conteúdo do Rodapé</h5>
                    <p class="grey-text text text-lighten-4">Podemos utilizar linhas e colunas aqui para organizar o rodapé.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a href="#">Link 01</a></li>
                        <li><a href="#">Link 02</a></li>
                        <li><a href="#">Link 03</a></li>
                        <li><a href="#">Link 04</a></li>
                    </ul>
                </div>
            </div>
        </div>
    -->

        <div class="footer-copyright cyan">
            <div class="container">
                2019 Copyright
                <a class="grey-text text-lighten-4 right" href="#">Mias links</a>
            </div>
        </div>
    </footer>
    <script type ="text/javascript" src="./assets/js/jquery_v3.2.1.js"></script>
    <script src="./assets/js/materialize.min.js"></script>
</body>
</html>
