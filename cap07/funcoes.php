<?php

// ====================================================================================================
// Sempre que a função imprimirTexto for chamada, será impresso a mensagem dentro da função.
// ====================================================================================================
function imprimirTexto($titulo)
{
    $texto = "Este é um texto a ser impresso.";

    echo "<h1> $titulo </h1>";
    echo "<p> $texto </p>";
}

// ====================================================================================================
// Chamadas à função imprimirTexto() com passagem de parâmetro.
// ====================================================================================================
imprimirTexto("Título escolhido");
imprimirTexto("Outro título");
imprimirTexto("Título diferente");


// ====================================================================================================
// Nova função, agora que recebe dois parâmetros.
// ====================================================================================================
function imprimirTextoDois($titulo, $texto)
{
    echo "<h1> $titulo </h1>";
    echo "<p> $texto </p>";
}


// ====================================================================================================
// Chamadas à função imprimirTextoDois() com passagem de dois parâmetros.
// ====================================================================================================
imprimirTextoDois("imprimirTextoDois", "Função que recebe dois parâmetros");
imprimirTextoDois("imprimirTextoDois Novamente", "Função que recebe dois parâmetros outro teste");
