<?php

require_once("Produto.php");

// ========================================================================================================================
// Classe Venda
// ========================================================================================================================

class Venda
{
    private $idVenda;
    private $total;
    private $cliente;
    private $vendedor;
    private $produtos;

    public function __construct($idVenda = null, $total = 0, $cliente = null, $vendedor = null, $produtos = []) {
        $this->idVenda = $idVenda;
        $this->total = $total;
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->produtos = $produtos;
    }

    public function setIdVenda($idVenda)
    {
        $this->idVenda = $idVenda;
    }
    public function getIdVenda()
    {
        return $this->idVenda;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }
    public function getTotal()
    {
        return $this->total;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
    public function getCliente()
    {
        return $this->cliente;
    }

    public function setVendedor()
    {
        $this->vendedor = $vendedor;
    }
    public function getVendedor()
    {
        return $this->vendedor;
    }

    public function addProduto($vendaProduto)
    {
        if ($vendaProduto instanceof VendaProduto) {
            $this->produtos[] = $vendaProduto;
        }
    }
    public function getProdutos()
    {
        return $this->produtos;
    }

    public function calculaTotal()
    {
        # code...
    }
}


