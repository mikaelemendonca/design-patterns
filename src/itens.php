<?php

require 'vendor/autoload.php';

use Alura\DesingPatterns\CacheOrcamentoProxy;
use Alura\DesingPatterns\ItemOrcamento;
use Alura\DesingPatterns\Orcamento;

$orcamento = new Orcamento();

$item1 = new ItemOrcamento();
$item1->valor = 300;

$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamento2 = new Orcamento();

$orcamento2->addItem($item1);

$orcamento->addItem($orcamento2);

$proxy = new CacheOrcamentoProxy($orcamento);

echo $proxy->valor();
echo $proxy->valor();
