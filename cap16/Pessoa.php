<?php

// ====================================================================================================
// Class base para as classes Cliente e Vendedor, que são pessoas, neste projeto de exemplo.
// ====================================================================================================

abstract class Pessoa
{
    protected $id;
    protected $nome;
    protected $endereco;
    protected $telefone;

    public function __construct($id, $nome, $endereco, $telefone) {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function __sleep()
    {
        // ============================================================================================
        // get_object_vars() retorna um array associativo com os atributos em que o índice será o nome
        // do atributo e o valor será o valor do atributo.
        //
        // Já a função array_keys() retornará um array contendo apenas as chaves associativas do array
        // passado ao método, neste caso é passado o array retornado por get_object_vars().
        // ============================================================================================
        return array_keys(get_object_vars($this));
    }
}

