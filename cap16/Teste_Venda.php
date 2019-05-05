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


