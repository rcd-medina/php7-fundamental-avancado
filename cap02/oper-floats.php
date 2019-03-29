<?php

//
// A variável $i recebe o valor ponto flutuante 100.65.
$i = 100.65;

//
// Operações de soma, subtração, multiplicação e divisão, respectivamente.
$soma = $i + 100;
$sub  = $i - 100;
$mul  = $i * 2;
$div  = $i / 2;

//
// Imprime o resultado.
printf("<p>i = %f | soma = %f | subtração = %f | multiplicação = %f | divisão = %f</p>\n", $i, $soma, $sub, $mul, $div);

//
// Função round() serve para arredondar os ponto flutuante.
// O valor de 15.366 foi arredondado para 15.000000 pela função round().
// Se o valor fosse 15.5xx seria arredondado para 16.000000
$r   = 15.366;
$r0  = round($r);
printf("r0 = %f <br>", $r0);

//
// Arredondando com maior precisão com uso de round().
// A função round() aceita um segundo parâmetro, um número, que serve como referência para indicar
// que a partir daquela posição, APÓS O PONTO, se inicia a arredondamento.
//
// Ex.: round(15.366, 1) ==> O segundo parâmetro, o número 1, informa que o arredondamento
// começara a partir do primeiro número após o ponto (.), que no caso seria o número 3.
// Logo, 15.366 será arredondado para 15.400.
$r1 = round($r, 1);
printf("r1 = %f <br>", $r1);

//
// Resultado: 15.370
$r1 = round($r, 2);
printf("r1 = %f <br>", $r1);

//
// Função ceil(), sempre arredonda para cima.
// Resultado: 16.000
$r  = 15.366;
$r0 = ceil($r);
printf("r1 = %f (ceil())<br>", $r0);

//
// Função floor(), sempre arredonda para baixo.
// Resultado: 15.000
$r  = 15.366;
$r0 = floor($r);
printf("r1 = %f (floor())<br>", $r0);

//
// Função intval(), converte um float para int (integer) excluindo a parte flutuante.
// Resultado: 15
$r = 15.366;
var_dump(intval($r));
echo "<br>";

$i = intval($r);
printf("i = %d (intval())<br>", $i);

//
// Função pow(), faz a potencia de um numero elevado a outro.
$r = pow(2, 10);
printf("<p>r = %f</p>", $r);

$r = pow(2.1, 10);
printf("<p>r = %f</p>", $r);

//
// Função rand(), retorna um número aleatório.
$r = rand();
printf("<p>rand = %10.4f </p>", $r);

// Função rand(), retorna um número aleatório, neste exemplo o número retornado estará
// dentro de uma faixa, no exemplo entre 1 e 10 e outo entre 10 e 1000
printf("<p>rand = %10.4f </p>", rand(1, 10));
printf("<p>rand = %10.4f </p>", rand(10, 1000));

?>