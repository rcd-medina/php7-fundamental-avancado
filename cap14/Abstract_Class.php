<?php

// ====================================================================================================
// Classe abstrata Veiculo.
// Ela não possui nenhum tipo de implementação, no momento, apenas a definição (declaração) de algumas
// propriedades e métodos.
// Se tentarem uma instanciação desta classe ocorrera um erro.
// ====================================================================================================
abstract class Veiculo
{
    protected $marca;
    protected $modelo;

    // ================================================================================================
    // Quando um método é declarado como sendo abstrato, a classe derivada é obrigada a implementar
    // o método ou redeclara lo como novamente como protected
    // ================================================================================================
    abstract protected function getTipo();
    
    public function printData()
    {
        echo $this->getTipo();
    }
}


// ====================================================================================================
// Classe Carro extende (deriva) da classe abstrata.
// ====================================================================================================
class Carro extends Veiculo
{
    // ================================================================================================
    // O método getTipo() mesmo implementado na classe derivada, ainda é protected, com isso ele não
    // pode ser acessado fora do objeto.
    // Para resolver esse problema, na classe abstrata Veiculo foi declardo o método public printData()
    // que é herdado pelas classes derivadas e quando os objetos instanciados o chamarem, ele irá
    // executar uma chamada ao método getTipo() das classes derivadas.
    // ================================================================================================
    protected function getTipo()
    {
        return "<p>Carro</p>";
    }
}


// ====================================================================================================
// Classe Bicicleta extende (deriva) da classe abstrata.
// ====================================================================================================
class Bicicleta extends Veiculo
{
    protected function getTipo()
    {
        return "<p>Bicicleta</p>";
    }
}


// ====================================================================================================
// Criando objetos.
// ====================================================================================================
// $v = new Veiculo() ==> Erro: A classe Veiculo é declarada como abstrata, não pode ser instanciada.
$c = new Carro();
$b = new Bicicleta();

$c->printData();
$b->printData();


