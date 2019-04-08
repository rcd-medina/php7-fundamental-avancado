
<?php

$res = 0;

if (count($_POST) && isset($_POST['op'])) {
    switch ($_POST["op"]) {
        case "som":
        $res = $_POST['n1'] + $_POST['n2'];
        break;

        case "div":
        $res = $_POST['n1'] / $_POST['n2'];
        break;

        case "mul":
        $res = $_POST['n1'] * $_POST['n2'];
        break;

        case "sub":
        $res = $_POST['n1'] - $_POST['n2'];
        break;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" type="text/css" media="screen,projection">
    <title>Calculadora - Materialize</title>
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col s8">
            <h4 class="header">Minha Calculadora</h4>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="" alt="">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="row">
                            <form method="post">
                                <div class="input-field col s6">
                                    <input type="number" name="n1" id="n1" />
                                    <label for="n1">Operando 1</label>
                                </div>

                                <div class="input-field col s6">
                                    <input type="number" name="n2" id="n2" />
                                    <label for="n1">Operando 2</label>
                                </div>

                                <div class="input-field col s12">
                                    <button type="submit" name="op" value="som" class="btn col s2 offset-s1 amber lighten-1">Soma</button>
                                    <button type="submit" name="op" value="div" class="btn col s2 offset-s1 light-blue darken-3">Dividir</button>
                                    <button type="submit" name="op" value="mul" class="btn col s2 offset-s1 green darken-3">Multip.</button>
                                    <button type="submit" name="op" value="sub" class="btn col s2 offset-s1 red darken-3">Subtrair</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#">Resultado: <?php echo "$res"; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.js" type="text/javascript"></script>
<script src="https://unpkg.com/popper.js" type="text/javascript"></script>
<script src="https://unpkg.com/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>

</body>
</html>