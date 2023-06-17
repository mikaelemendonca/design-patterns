<?php

use Alura\DesingPatterns\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

$fabricaVenda = new VendaServicoFactory('Mika');
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
