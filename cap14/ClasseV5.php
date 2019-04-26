<?php

// ====================================================================================================
// Exemplo de como passar parâmetros pelos dos objetos durante a instanciação.
// Neste exemplo parâmetros com valores padrão, caso não seja fornecido nenhum valor no momento
// da instanciação do objeto.
// ====================================================================================================

class Ponto2D
{
    private $x;
    private $y;

    public function __construct($x = 2, $y = 1) {
        $this->x = $x;
        $this->y = $y;
    }

    public function __destruct()
    {
        
    }
}

class Ponto3D
{
    private $x;
    private $y;
    private $z;

    public function __construct($x = 10, $y = 20, $z = 30) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function __destruct()
    {
        
    }
}


$p2d = new Ponto2D(100, 500);
$p3d = new Ponto3D(100, 500);

echo "<pre>";
var_dump($p2d);
echo "</pre>";

echo "<pre>";
var_dump($p3d);
echo "</pre>";



