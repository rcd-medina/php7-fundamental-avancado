<?php

//namespace PessoaJuridica;

use PessoaJuridica\Pessoa;

require_once('Pessoa1.php');
require_once('Pessoa2.php');


$p = new Pessoa("Robert Junior", 42);
$p->imprimir();

