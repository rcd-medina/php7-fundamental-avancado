<?php


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

/*echo "<pre>";
print_r($produtos);
echo "</pre> <br><br><br>";*/



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

$vendedorPedro = new Vendedor(110, "Pedro Souza", "Av. Tito 330", "11 4000-0004", 3580.00);
$vendedorMaria = new Vendedor(150, "Maria Ferreira", "Rua Vergueiro 800", "11 5000-5050", 3780.00);

$clienteJoao = new Cliente(15, "Joao Barbosa", "Rua Acacias 124", "11 2020-1010", 150);
$clienteBarbara = new Cliente(15, "Barbara Oliveira", "Rua Europa 260", "11 7070-8080", 180);


$venda1 = new Venda(1000, 0, $clienteJoao, $vendedorPedro);
$venda1->addProduto(new VendaProduto($prodMouse, 1, 0));
$venda1->addProduto(new VendaProduto($prodPastel, 2, 0, 0.10));
$venda1->addProduto(new VendaProduto($prodFeijão, 5, 0, 0.20));

$venda2 = new Venda(2000, 0, $clienteBarbara, $vendedorMaria);
$venda2->addProduto(new VendaProduto($prodInfo, 1, 0));
$venda2->addProduto(new VendaProduto($prodNote, 1, 0, 0.50));
$venda2->addProduto(new VendaProduto($prodFeijão, 5, 0, 0.20));

$venda3 = new Venda(3000, 0, $clienteJoao, $vendedorPedro);
$venda3->addProduto(new VendaProduto($prodNote, 1, 0));
$venda3->addProduto(new VendaProduto($prodPastel, 5, 0, 0.10));
$venda3->addProduto(new VendaProduto($prodFeijão, 3, 0, 0.20));

$vendas = [$venda1, $venda2, $venda3];

function ImprimirVendas($vendas)
{
    # code...
}


ImprimirVendas();

