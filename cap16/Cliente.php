<?php

// ====================================================================================================
// Carrega o arquivo Pessoa.php que contém a classe Pessoa.
// ====================================================================================================
require_once("Pessoa.php");


// ====================================================================================================
// A classe Cliente é uma classe especializada e deriva da classe base Pessoa.
// ====================================================================================================

class Cliente extends Pessoa
{
    private $pontosFidelidade;

    public function __construct($id = null, $nome = "", $endereco = "", $telefone = "", $pontos = 0) {
        parent::__construct($id, $nome, $endereco, $telefone);
        $this->pontosFidelidade = $pontos;
    }

    public function setPontosFidelidade($pontos)
    {
        $this->pontosFidelidade = $pontos;
    }

    public function getPontosFidelidade()
    {
        return $this->pontosFidelidade;
    }
}

