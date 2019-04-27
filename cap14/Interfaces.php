<?php


// ====================================================================================================
// Declaração de duas interfaces no padrão PHP.
// ====================================================================================================
interface iString
{
    public function toString();
}


interface iHtml
{
    public function toHtml();
}


// ====================================================================================================
// Uma função que verifica se um determinado objeto implementa uma das duas interfaces, ou as duas.
// ====================================================================================================
function imprimir($o)
{
    if ($o instanceof iString && $o instanceof iHtml) {
        echo "<br>";
        echo $o->toString();
        
        echo "<br>";
        echo $o->toHtml();
    }
}


// ====================================================================================================
// Uma classe que implementa as interfaces declaradas anteriormente.
// ====================================================================================================
class Cliente implements iString, iHtml
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function toString()
    {
        $s = "Nome: "   . $this->nome . ", ";
        $s .= "Idade: " . $this->idade;
        
        return $s;
    }

    public function toHtml()
    {
        $s = "<br>";
        $s .= "<p>Nome: "  . $this->nome . "</p>";
        $s .= "<p>Idade: " . $this->idade . "</p>";
        $s .= "<br>";

        return $s;
    }
}


// ====================================================================================================
// Teste com a classe que implementa as interfaces.
// ====================================================================================================
$cli = new Cliente("Joselito da Silva", 68);
imprimir($cli);



