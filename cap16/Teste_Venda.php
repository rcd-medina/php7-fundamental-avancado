<?php
/*

require_once("Cliente.php");
require_once("Vendedor.php");
require_once("Departamento.php");
require_once("Produto.php");
require_once("VendaProduto.php");
require_once("Venda.php");

$depAlimentos   = new Departamento(1, "Alimetos");
$depRoupas      = new Departamento(2, "Roupas");
$depEletronicos = new Departamento(3, "Eletrônicos");
$depRevistas    = new Departamento(4, "Revista");

$prodNote = new Produto(1, "Notebook Asus", 5999.99, $depEletronicos);
$prodInfo = new Produto(2, "Info Maio 2019", 15.99, $depRevistas);
$prodPastel = new Produto(3, "Pastel de Carne Congelado", 4.99, $depAlimentos);
$prodFeijão = new Produto(4, "Feijão Carioca", 8.99, $depAlimentos);
$prodMouse  = new Produto(5, "Mouse Óptico", 12.99, $depEletronicos);

$produtos = [$prodNote, $prodInfo, $prodPastel, $prodFeijão, $prodMouse];

echo "<pre>";
print_r($produtos);
echo "</pre> <br><br><br>";



echo "<table>";
echo "<tr> <td>ID</td> <td>Nome</td> <td>Preço</td> <td>Departamento</td> </tr>";
foreach ($produtos as $p) {
    echo "<tr>";
    echo "<td>" . $p->getIdProduto() . "</td>";
    echo "<td>" . $p->getNome() . "</td>";
    echo "<td>" . $p->getPreco() . "</td>";
    echo "<td>" . $p->getDepartamento()->getNome() . "</td>";
    echo "</tr>";
}
echo "</table>";

$vendedorPedro = new Vendedor(20, "Pedro de Souza", "Rua das Acassias 502", 3600.00);
$vendedorBento = new Vendedor(35, "Bento Rodrigues", "Rua Vergueiro 110", 3450.00);

$clienteMaria = new Cliente(254, "Maria Aparecida", "Rua America 81", "11 5241-1200", 200);
$clienteJoao  = new Cliente(135, "João da Silva", "Rua Turiassu", "11 1414-1000", 150);

$venda01 = new Venda(1, 0, $clienteJoao, $vendedorBento);
$venda01->addProduto(new VendaProduto(5, $prodMouse, 1, 0.0));
$venda01->addProduto(new VendaProduto(2, $prodInfo, 1, 0.10));
$venda01->addProduto(new VendaProduto(4, $prodFeijão, 2, 0.0));

$venda02 = new Venda(2, 0, $clienteMaria, $vendedorPedro);
$venda02->addProduto(new VendaProduto(3, $prodPastel, 3, 0.30));
$venda02->addProduto(new VendaProduto(1, $prodNote, 1, 0.15));
$venda02->addProduto(new VendaProduto(4, $prodFeijão, 2, 0.0));

$venda03 = new Venda(3, 0, $clienteJoao, $vendedorPedro);
$venda03->addProduto(new VendaProduto(1, $prodNote, 1, 0.10));
$venda03->addProduto(new VendaProduto(5, $prodMouse, 1, 0.05));
$venda03->addProduto(new VendaProduto(3, $prodPastel, 2, 0.0));

$vendas = [$venda01, $venda02, $venda03];

function ImprimirVendas($vendas)
{
    echo "<br><br><br>";

    foreach ($vendas as $v) {
        echo "<p>ID da Venda:" . $v->getIdVenda() . "</p>";
        echo "<p>Vendedor: " . $v->getCliente()->getNome() . "</p>";
        echo "<p>Cliente: " . $v->getVendedor()->getNome() . "</p>";
            
        echo "<table>";
        echo "<tr> <td>ID</td> <td>Nome</td> <td>Departamento</td> <td>Quantidade</td> <td>Desconto</td> <td>Total</td> </tr>";
        foreach ($v->getProdutos() as $p) {
            echo "<tr>";
            echo "<td>" . $p->getProduto()->getIdProduto() . "</td>";
            echo "<td>" . $p->getProduto()->getNome() . "</td>";
            echo "<td>" . $p->getProduto()->getDepartamento() . "</td>";
            echo "<td>" . $p->getQuantidade() . "</td>";
            echo "<td>" . $p->getDesconto() . "</td>";
            echo "<td>" . "0" . "</td>";
        }
        echo "<hr>";
    }
}

ImprimirVendas($vendas);

*/