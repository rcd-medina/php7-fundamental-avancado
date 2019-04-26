<?php

// ====================================================================================================
// Definição da classe
// ====================================================================================================
class MinhaPrimeiraClasse
{
    // ================================================================================================
    // Propriedades da classe.
    // ================================================================================================
    public $meuAtributo1;
    public $meuAtributo2;
}

// ====================================================================================================
// Instância um objeto e configura (atribui valores) às propriedades do objeto.
// ====================================================================================================
$obj = new MinhaPrimeiraClasse();
$obj->meuAtributo1 = 100;
$obj->meuAtributo2 = 200;

// ====================================================================================================
// Diagnóstico sobre objeto.
// ====================================================================================================
var_dump($obj);
echo '<br><br>';

// ====================================================================================================
// Definição de outra classe.
// ATENÇÃO: O mais correto é cada arquivo conter apenas uma definição (declaração) de classe.
// ====================================================================================================
class MinhaSegundaClasse
{
    public $meuAtributo1;
    public $meuAtributo2;

    // ================================================================================================
    // Definição de um método (função) do objeto.
    // Neste exemplo, quando o método for chamado, executará o código contido nele.
    // ================================================================================================
    function metodoDaClasse()
    {
        echo "<br>";
        echo "meuAtributo1 = " . $this->meuAtributo1 . "<br>";
        echo "meuAtributo2 = " . $this->meuAtributo2 . "<br>";
    }
}

$obj = new MinhaSegundaClasse();
$obj->meuAtributo1 = 1000;
$obj->meuAtributo2 = 2000;
$obj->metodoDaClasse();


