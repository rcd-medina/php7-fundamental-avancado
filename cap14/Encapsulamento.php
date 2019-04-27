<?php


class MinhaClasseBase
{
    // ================================================================================================
    // Encapsulamento:
    // public    ==> A propriedade pode ser acessada por "fora" da classe ou objeto.
    // protected ==> A propriedade pode ser aceesada por uma classe derivada por medio da herança.
    // private   ==> A propriedade só pode ser acessada por "dentro" da classe onde foi declarada, não
    //               pode ser acessada, diretamente, nem mesmo por herança.
    //
    // Quando declarada uma propriedade ou método sem que seja especificado um nível de encapsulamento
    // automaticamente a propriedade ou método se tornarão públicos.
    // ================================================================================================
    public    $atributo1;
    protected $atributo2;
    private   $atributo3;

    public function __construct($atr1, $atr2, $atr3) {
        $this->atributo1 = $atr1;
        $this->atributo2 = $atr2;
        $this->atributo3 = $atr3;
    }

    function imprimirDados()
    {
        echo "<p>( ";
        echo $this->atributo1 . ", ";
        echo $this->atributo2 . ", ";
        echo $this->atributo3 . ")</p>";
    }

    public function getAtributo3()
    {
        return $this->atributo3;
    }
}

// ====================================================================================================
// Definição da primeira sub classe.
// ====================================================================================================
class MinhaSubClasse extends MinhaClasseBase
{
    public function __construct($atr1, $atr2, $atr3) {
        parent::__construct($atr1, $atr2, $atr3);
    }

    function imprimirDados2()
    {
        echo "<p>( ";
        echo $this->atributo1 . ", ";
        echo $this->atributo2 . ", ";
        echo $this->getAtributo3() . ")</p>";
    }
}


// ====================================================================================================
// Definição da segunda sub classe.
// ====================================================================================================
class MinhaSubSubClasse extends MinhaSubClasse
{
    public function __construct($atr1, $atr2, $atr3) {
        parent::__construct($atr1, $atr2, $atr3);
    }

    function imprimirDados2()
    {
        echo "<h1>Minha Sub Sub Classe</h1>";
        echo "<p>( ";
        echo $this->atributo1 . ", ";
        echo $this->atributo2 . ", ";
        echo $this->getAtributo3() . ")</p>";
    }
}


// ====================================================================================================
// Testes com as classes e objetos.
// ====================================================================================================
$objCBase = new MinhaClasseBase(1, 2, 3);
$objCBase->imprimirDados();
$objCBase->atributo1 = 10;
// $objCBase->atributo2 = 20; ==> Não funciona, atributo protegido (protected).
// $objCBase->atributo3 = 30; ==> Não funciona, atributo privado (private).

$objSubClasse = new MinhaSubClasse(100, 200, 300);
$objSubClasse->imprimirDados2();

$objsubsub = new MinhaSubSubClasse(1000, 2000, 3000);
$objsubsub->imprimirDados2();
// $objsubsub->atributo2 = "protected"; ==> Embora o atributo2 (protected) seja herdado, o acesso
//                                          direto não é permitido.

