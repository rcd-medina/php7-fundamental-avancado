<?php


abstract class MeuTipo
{
    protected $valor;

    public function __construct($v) {
        $this->valor = $v;
    }

    abstract function somar($v);

    abstract function imprimir();
}

class MeuTipoString extends MeuTipo
{
    public function __construct($v) {
        parent::__construct($v);
    }

    public function somar($v)
    {
        if (is_string($v)) {
            $this->valor = $this->valor . ' ' . $v;
        }
    }

    public function imprimir()
    {
        printf("<p>Minha String: %s </p>", $this->valor);
    }
}


class MeuTipoInteiro extends MeuTipo
{
    public function __construct($v) {
        parent::__construct($v);
    }

    public function somar($v)
    {
        if (is_integer($v)) {
            $this->valor = $this->valor + $v;
        }
    }

    public function imprimir()
    {
        printf("<p>Minha Inteiro: %s </p>", $this->valor);
    }
}

$s = new MeuTipoString("Olá");
$s->somar("Mundo");
$s->somar("!!!");
$s->imprimir();

$i = new MeuTipoInteiro(100);
$i->somar(200);
$i->somar(300);
$i->imprimir();
