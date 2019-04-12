<?php

// ====================================================================================================
// Sessões no PHP servem para armazenar temporariamente dados no servidor HTML/PHP
// Por padrão uma sessão dura até o momento em que o navegador é fechado.
// ====================================================================================================

// ====================================================================================================
// Inicia uma sessão.
// ====================================================================================================
session_start();

// ====================================================================================================
// O array $_SESSION[] sempre armazena os dados da sessão inicia.
// ====================================================================================================
if (! isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 1;
} else {
    $_SESSION['contador']++;
}

$msg = "Você já visitou este site " . $_SESSION['contador'] . " vezes nesta sessão.";

// ====================================================================================================
// Destrói uma sessão.
// ====================================================================================================
if ($_SESSION['contador'] == 20) {
    session_destroy();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessões PHP</title>
</head>
<body>
    <h1>
        <?php echo $msg; ?>
    </h1>
</body>
</html>