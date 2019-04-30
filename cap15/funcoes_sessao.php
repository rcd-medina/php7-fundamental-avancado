<?php


class MinhaClasse
{
    private $at1;
    private $at2;

    public function __construct($at1, $at2) {
        $this->at1 = $at1;
        $this->at2 = $at2;
    }

    public function imprimir()
    {
        $atributos = get_object_vars($this);
        var_dump(array_keys($atributos));
    }
}


$obj = new MinhaClasse(10, 20);
$obj->imprimir();
echo "<br><br>";

$obj = new MinhaClasse(30, 40);
$obj->imprimir();
