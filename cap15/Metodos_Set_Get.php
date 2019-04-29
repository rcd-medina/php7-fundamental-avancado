<?php

// ====================================================================================================
// Classe para demonstrar o uso dos métodos "mágicos" set e get.
// ====================================================================================================

class Aluno
{
    private $notas;

    public function __construct() {
        $this->notas = array();
    }

    // ================================================================================================
    // Definição do método mágico set.
    // ================================================================================================
    public function __set($nome, $valor)
    {
        if (isset($nome) && isset($valor)) {
            $this->notas[$nome] = $valor;
        }
    }

    // ================================================================================================
    // Definição do método mágico get.
    // ================================================================================================
    public function __get($nome)
    {
        if (isset($nome) && isset($this->notas[$nome])) {
            return $this->notas[$nome];
        }
    }
}

// ====================================================================================================
// Exemplificando o uso.
// As propriedade java, php e cobol não existem na definição estrutural da classe, mas quando usamos
// a sintaxe de chamada à uma propriedade que não existe, o método "mágico" __set é chamado é cria
// dinamicamente a propriedade para ser utilizada, no exemplo, java, php e cobol.
// Além de criar dinamicamente a propriedade, o método __set também realiza a atribuição de um valor,
// neste exemplo seriam os valore 6.5 para java, 9.5 para php e 7.0 para cobol.
//
// __set(propriedade, valor)
// ====================================================================================================
$a = new Aluno();
$a->java  = 6.5;
$a->php   = 9.5;
$a->cobol = 7.0;

echo "<pre><br>";
var_dump($a);
echo "</pre><br>";

echo "<pre><br>";
print_r($a);
echo "</pre><br>";


// ====================================================================================================
// Chamando o método "mágico" __get().
// Aqui ocorre uma chamada direta à propriedade cobol, que não existe na definição estrutural da classe
// mas graça ao método __set() agora existe.
// Quando chama se a propriedade, na verdade está sendo executado o método __get(), que realiza uma
// verificação em relação à existencia da propriedade e, caso afirmativo, se existe uma valor atribuído
// ====================================================================================================
echo "<p>Nota Cobol: " . $a->cobol . "</p>";

