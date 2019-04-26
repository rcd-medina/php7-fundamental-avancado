<?php

// ====================================================================================================
// Definição da classe para o exemplo de construtores e destrutores.
// ====================================================================================================
class ClasseExemplo
{
    private $atributoPrivado;
    public $atributoPublico;

    // ================================================================================================
    // Construtor: Este método (public function __construct()) sempre será automáticamente quando um
    // objeto estiver sendo instânciado.
    // ================================================================================================
    public function __construct()
    {
        echo "<h1>Dentro do Construtor</h1>";
        $this->atributoPrivado = "Inicializando o atributo privado";
        $this->atributoPublico = "Inicializando o atributo público";
    }

    // ================================================================================================
    // Destrutor: O método (public function __destruct()) será chamado quando o código chegar ao fim
    // ou seja, no final do código. Isso causará a liberação de recursos utilizados na memória.
    // ================================================================================================
    public function __destruct()
    {
        echo "<p>Destruíndo o objeto.</p>";
        $this->imprimirAtributos();
    }

    public function setAtributo($valor)
    {
        $this->atributoPrivado = $valor;
    }

    public function getAtributo()
    {
        return $this->atributoPrivado;
    }

    public function imprimirAtributos()
    {
        echo "<p>" . $this->atributoPrivado . "</p>";
        // echo "<p>" . $this->atributoPublico . "</p>";
    }
}

$obj = new ClasseExemplo();
$obj->imprimirAtributos("Obj fora da função.");


// ====================================================================================================
// O objeto $objeto tem seu tempo de vida delimitado pelas abre chave ({) e fechar (}) da função
// criarObjetos, enquanto que o objeto $obj tem seu tempo de vida delimitado à tag fecha php (? >)
// que encerra o arquivo de código do PHP.
// ====================================================================================================
function criarObjetos()
{
    $objeto = new ClasseExemplo();
    $objeto->setAtributo("Obj dentro da função.");
}

criarObjetos();


