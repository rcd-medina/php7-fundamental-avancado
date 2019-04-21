

<?php

// ========================================================================================================
// o array $_FILES multidimensional contém as informações do arquivo selecionado para ser enviado, sendo:
//
// ========================================================================================================

// Abaixo, a estrutura do array $_FILES:
/*
    Array
    (
        [arquivo] => Array
            (
                [name] => nome_arquivo.txt
                [type] => tipo_do_arquivo
                [tmp_name] => caminho_e_nome_temporário_do_arquivo.tmp
                [error] => 0
                [size] => 3020
            )

    )
*/

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$nome = isset($_FILES['arquivo']) ? $_FILES['arquivo']['name'] : "";
$tipo = isset($_FILES['arquivo']) ? $_FILES['arquivo']['type'] : "";
$tmp  = isset($_FILES['arquivo']) ? $_FILES['arquivo']['tmp_name'] : "";
$tam  = isset($_FILES['arquivo']) ? $_FILES['arquivo']['size'] : "";

// ========================================================================================================
// A função move_uploaded_file($origem, $destino) de fato faz o uploaded do arquivo de maneira definitiva
// para o servidor.
// ========================================================================================================
if ($tam > 0) {
    move_uploaded_file($tmp, "uploads/" . $nome);
}

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload de Arquivos</title>
</head>
<body>
    <h1>Upload de Arquivos</h1>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo" />
        <br>
        <br>

        <input type="submit" value="Enviar Arquivo" />
    </form>

    <h3>Iformaçõessobre o arquivo:</h3>
    
    <?php
        echo "Nome: " . $nome . '<br>';
        echo "Tipo: " . $tipo . '<br>';
        echo "Tmp.: " . $tmp  . '<br>';
        echo "Tam.: " . $tam  . '<br>';
    ?>
</body>
</html>