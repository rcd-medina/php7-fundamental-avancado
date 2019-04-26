<?php


// ====================================================================================================
// Classe para exemplificar o conceito de encapsulamento.
// ====================================================================================================
class Exmeplo
{
    public $atributoPublico;
    private $atributoPrivado;

    // ================================================================================================
    // Método para atribuir (configurar) um valor no atributo $atributoPrivado
    // ================================================================================================
    function setAtributoPrivado($valor)
    {
        $this->atributoPrivado = $valor;
    }
}

// ====================================================================================================
// Testes com os atributos públicos (public) e privados (private).
// ====================================================================================================
$obj = new Exmeplo();
$obj->atributoPublico = 1000;
$obj->setAtributoPrivado(2000);
var_dump($obj);