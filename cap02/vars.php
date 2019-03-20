<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variáveis</title>
</head>
<body>

<?php

//=========================================================================================================
// Exemplos para trabalhar com variáveis na linguagem PHP.
//
// Toda variável declarada é precedida com um $ (cifrão).
// Após o $ (cifrão) o nome da variável pode começar com uma letra ou
// um _ (conhecido como subtraço, underscore ou underline).
// Não pode possuir caracteres especiais (+ - ; . ~ ^)... etc.
// Pode conter números, mas não no ínicio do nome.
//=========================================================================================================

//
// Tipos numéricos inteiros.
$nd = 10;       // Base decimal.
$no = 010;      // Base octal.
$nh = 0x10;     // Hexadecimal.

echo "$nd $no $nh";
echo "<br>";

// Tipos numéricos de ponto flutuante.
$nd = 0.125;     // Padrão
$nv = .125;     // Exatamente a mesma coisa da declaração de cima.
$ne = 2e10;     // 2 elevado a 10.
$nf = 2e-10;    // 2 elvado a menos 10.

echo "$nd $nv $ne $nf";
echo "<br>";

// Tipos string.
$s1 = "Texto simples: nd = $nd";         // Aspas duplas, acontece a "interpolação", verificação de valores em variáveis.
$s2 = 'Texto simples também: nd = $nd';  // Aspas simples, impressão literal do que está entre as aspas.

echo "$s1 <br>";
echo "$s2 <br>";


// Tipo booleano, true ou false.
$b1 = true;         // Valor verdadeiro (true).
$b2 = TRUE;         // idem, indicado utilizar sempre em minúsculo.

echo "b1 = $b1 <br>";
echo "b1 = $b2 <br>";

$b3 = false;        // Valor falso.
echo "b3 = $b3";    // Na impressão do texto, um valor false (falso) é considerado vazio.

?>


</body>
</html>