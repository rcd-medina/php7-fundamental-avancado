<?php

// ====================================================================================================
// Definição das classes para exemplificação do conceito de herança.
// ====================================================================================================


// ====================================================================================================
// Classe Pessoa
// ====================================================================================================
class Pessoa
{
    private $nome;
    private $endereco;

    public function __construct($nome = '', $endereco = '') {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function __destruct() {}

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
}

// ====================================================================================================
// Classe PessoaFisica que herda (extende) da classe Pessoa os atributos $nome e $endereco.
// ====================================================================================================
class PessoaFisica extends Pessoa
{
    private $cpf;

    public function __construct($nome = '', $endereco = '', $cpf = '') {
        parent::__construct($nome, $endereco);
        $this->cpf = $cpf;
    }

    public function __destruct() {}
    
    public function setCPF($cpf = '')
    {
        $this->cpf = $cpf;
    }

    public function getCPF()
    {
        return $this->cpf;
    }
}

// ====================================================================================================
// Fim das definições de classes.
// ====================================================================================================

$objPessoa = new Pessoa('Rogério dos Santos', 'Av. Antártida, 1000');
$objPessoaF = new PessoaFisica('Amanda Souza', 'Rua das Termópilas 520', '155.255.355-44');

var_dump($objPessoa);
echo "<br><br>";

/*
$objPessoaF->setNome('Amanda Souza');
$objPessoaF->setEndereco('Rua das Termópilas 520');
*/
var_dump($objPessoaF);


// ====================================================================================================
// Definição da classe PessoaJuridica
// ====================================================================================================
class PessoaJuridica extends Pessoa
{
    private $cnpj;

    public function __construct($nome = '', $endereco = '', $cnpj) {
        parent::__construct($nome, $endereco);
        $this->cnpj = $cnpj;
    }

    public function setCNPJ($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCNPJ()
    {
        return $this->cnpj;
    }

    public function imprimirDados()
    {
        echo "<br>";
        echo "<p>" . $this->getNome() . "</p>";
        echo "<p>" . $this->getEndereco() . "</p>";
        echo "<p>" . $this->cnpj . "</p>";
        echo "<br>";
    }
}

$pessoaJ = new PessoaJuridica('Comercio Eletrônico LTDA', 'Rua Santa E., 275', '12.044.500/0001-54');

echo "<br><br>";
var_dump($pessoaJ);

