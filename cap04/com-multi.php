<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comando switch</title>
</head>
<body>


<?php

$a = 3;

switch ($a) {
    case 1:
    echo "<p>a igual a 1</p>";
    break;

    case 2:
    echo "<p>a igual a 2</p>";
    break;

    case 3:
    echo "<p>a igual a 1</p>";
    break;

    default:
    echo "<p>a igual a não sei</p>";
}

//
// Outro exemplo de switch/case mas agora simulando um OR (||)
$a = 1;
switch ($a) {
    case 1:
    case 2:
        echo "<p>a = 1 ou a = 2</p>";
        break;

    case 3:
    case 4:
        echo "<p>a = 3 ou a = 4</p>";
        break;

    default:
        echo "<p>a igual a não sei</p>";
}

?>


</body>
</html>
