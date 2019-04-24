
<?php

$arquivoUsuario = 'usuarios.json';

$usuarios = array();
if (file_exists($arquivoUsuario)) {
    $usuarios = json_decode(file_get_contents($arquivoUsuario), true);
}

if (isset($_FILES['foto']) && count($_POST)) {
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";*/
    
    $nome = $_FILES['foto']['name'];
    $tam  = $_FILES['foto']['size'];
    $tipo = $_FILES['foto']['type'];
    $tmp  = $_FILES['foto']['tmp_name'];
    $path = 'fotos/' . $nome;
    move_uploaded_file($tmp, $path);
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
                <li class="active"><a href="postagem.php">Nova Postagem</a></li>
                <li><a href="usuarios.php">Usuários</a></li>
                <li><a href="fotolog.php">Fotos</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <div class="container">
            <div class="row">
                <div class="col s10 offset-s1">
                    <div class="card grey lighten-5">
                        <div class="card-content">
                            <span class="card-title">Poste uma nova foto!</span>
                            <br>
                            <form class="container" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name="usuario_id">
                                        <?php
                                            if (count($usuarios)) {
                                                echo '<option value="" disabled selected>Quem é você?</option>';
                                                foreach ($usuarios as $id => $u) {
                                                    echo '<option value="' . $id . '">' . $u['nome'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="" disabled selected>Cadastre um novo usuário</option>';
                                            }
                                        ?>
                                        </select>
                                        <label>Usuário</label>
                                    </div>

                                    <div class="file-field input-field col s6">
                                        <div class="btn cyan accent-4 col s2">
                                            <span><i class="material-icons center">add_a_photo</i></span>
                                            <input type="file" name="foto">
                                        </div>
                                        <div class="file-path-wrapper col s10">
                                            <input class="file-path validate" type="text">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="titulo">Título do Post</label>
                                        <input type="text" name="titulo" id="titulo">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="mensagem">Sua Mensagem:</label>
                                        <textarea class="materialize-textarea" name="mensagem" id="mensagem"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s12 right-align">
                                        <button class="btn waves-effect waves-light" type="submit">Submit
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

    <script>
        $(document).ready(function(){
            $('select').material_select();
        });
    </script>
</body>
</html>
