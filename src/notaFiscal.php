<?php

use Alura\DesingPatterns\ItemOrcamento;
use Alura\DesingPatterns\NotaFiscal\ConstrutorNotaFiscalProduto;

require 'vendor/autoload.php';

$item1 = new ItemOrcamento();
$item1->valor = 500;
$item2 = new ItemOrcamento();
$item2->valor = 500;

$builder = new ConstrutorNotaFiscalProduto();
$notaFiscal = $builder->paraEmpresa('123456', 'mika Ltda')
    ->comItem($item1)
    ->comItem($item2)
    ->comObservacoes('Está foi feita por um builder.')
    ->constroi();

echo $notaFiscal->valorImpostos;

// $notaFiscal2 = $notaFiscal->clonar();
$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento();
var_dump($notaFiscal, $notaFiscal2);
