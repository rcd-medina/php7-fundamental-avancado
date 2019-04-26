<?php

// ====================================================================================================
// Exemplo de como passar parâmetros pelos dos objetos durante a instanciação.
// ====================================================================================================

class Ponto2D
{
    private $x;
    private $y;

    public function __construct($x, $y) {
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

    public function __construct($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function __destruct()
    {
        
    }
}


$p2d = new Ponto2D(100, 500);
$p3d = new Ponto3D(100, 500, 1000);

echo "<pre>";
var_dump($p2d);
echo "</pre>";

echo "<pre>";
var_dump($p3d);
echo "</pre>";



