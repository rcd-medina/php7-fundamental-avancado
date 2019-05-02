<?php


// ====================================================================================================
// Exemplo de como criar a própria exceção para um sistema.
// ====================================================================================================

class NumeroInteiroInvalido extends Exception
{

    public function mensagemErro()
    {
        $linhaErro = $this->getLine();
        $arquivoErro = $this->getFile();
        $mensagem = $this->getMessage();

        $s = "<p>Inteiro inválido:<br>Erro no Arquivo: $arquivoErro <br>";
        $s .= "Linha: $linhaErro <br>";
        $s .= "Mensagem: $mensagem";
        $s .= "</p>";

        return $s;
    }

}


class StringInvalida extends Exception
{

    public function mensagemErro()
    {
        $linhaErro = $this->getLine();
        $arquivoErro = $this->getFile();
        $mensagem = $this->getMessage();

        $s = "<p>String inválida:<br>Erro no Arquivo: $arquivoErro <br>";
        $s .= "Linha: $linhaErro <br>";
        $s .= "Mensagem: $mensagem";
        $s .= "</p>";

        return $s;
    }

}


function multiplica($n1, $n2, $msg)
{
    if (! is_integer($n1) || ! is_integer($n2)) {
        throw new NumeroInteiroInvalido("Número inteiro inválido");
    }

    if (! is_string($msg)) {
        throw new StringInvalida("String informada é inválida");
    }

    if ($n1 == 0 || $n2 == 0) {
        throw new NumeroInteiroInvalido("Números iguais a zero");
    }

    $r = $n1 * $n2;
    
    return "$msg: $r";
}

$n1 = 0;
$n2 = 20;
$msg = "O resultado é ";
$res = null;
try {
    $res = multiplica($n1, $n2, $msg);
} catch (NumeroInteiroInvalido $ex) {
    echo "<p>Você digitou um número inteiro errado.</p>";
    echo "<p>Mensagem do erro:</p>";
    echo $ex->mensagemErro();
} catch (StringInvalida $ex) {
    echo "<p>Você digitou uma mensagem errada.</p>";
    echo "<p>Mensagem do erro:</p>";
    echo $ex->mensagemErro();
} catch (Exception $ex) {
    echo "<p>Você digitou algo errado.</p>";
    echo "<p>Mensagem do erro:</p>";
    echo $ex->mensagemErro();
} finally {
    if (! is_null($res)) {
        echo $res;
    }
}


