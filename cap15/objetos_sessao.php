<?php

session_start();

class MinhaClasse
{
    private $atr1;
    private $atr2;

    public function __construct($atr1, $atr2) {
        $this->atr1 = $atr1;
        $this->atr2 = $atr2;
    }

    public function imprimirAtributos()
    {
        echo "<br>";
        echo "<p>Atributo 1 = " . $this->atr1 . "</p>";
        echo "<p>Atributo 2 = " . $this->atr2 . "</p>";
        echo "<hr>";
    }

    // ================================================================================================
    // Este método __sleep() é chamado exatamente quando ocorre uma atribuição de um objeto à uma
    // sessão. Este método indica quais valores de propriedades precisam ser armazenados na sessão
    // já que armazenar um objeto (referência de memória) não faz sentido porque será destruído quando
    // o código terminar de ser executado.
    // ================================================================================================
    public function __sleep()
    {
        return ["atr1", "atr2"];
    }

    // ================================================================================================
    //
    // ================================================================================================
    public function __wakeup(Type $var = null)
    {
        # code...
    }
}

$c = 0;
if (isset($_SESSION['objetos'])) {
    $c = count($_SESSION['objetos']);
}


// ================================================================================================
// ATENÇÃO:: Uma sessão até pode armazenar objetos, que são referências a endereços
// memória. O problema é que o objeto será destruído quando o código chegar ao
// final da execução, logo aquela referência de memória será perdida.
// ================================================================================================
$m = new MinhaClasse($c+1, $c+2);
$_SESSION['objetos'][] = $m;

foreach ($_SESSION['objetos'] as $i => $obj) {
    echo "<p>Objeto $i";
    echo $obj->imprimirAtributos();
}

$c = count($_SESSION['objetos']);
echo "<h2>Total de Objetos = $c </h2>";

if ($c == 10) {
    session_destroy();
}

//$m->imprimirAtributos();

//var_dump($_SESSION['objetos']);

