<?php

// ====================================================================================================
// Carrega o arquivo Pessoa.php que contém a classe base Pessoa.
// ====================================================================================================
require_once("Pessoa.php");


// ====================================================================================================
// A classe Vendedor é uma classe especializada, logo ela deriva da classe base Pessoa.
// ====================================================================================================
class Vendedor extends Pessoa
{
    private $salario;

    public function __construct($id = null, $nome = "", $endereco = "", $telefone = "", $salario = 0.00) {
        parent::__construct($id, $nome, $endereco, $telefone);
        $this->salario = $salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function get()
    {
        return $this->salario;
    }
}


