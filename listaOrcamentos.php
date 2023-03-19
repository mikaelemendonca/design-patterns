<?php 

require 'vendor/autoload.php';

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\ListaDeOrcamentos;

$orcamento01 = new Orcamento();
$orcamento01->quantidadeItens = 7;
$orcamento01->aprova();
$orcamento01->valor = 1500.75;

$orcamento02 = new Orcamento();
$orcamento02->quantidadeItens = 3;
$orcamento02->reprova();
$orcamento02->valor = 150;

$orcamento03 = new Orcamento();
$orcamento03->quantidadeItens = 5;
$orcamento03->finaliza();
$orcamento03->valor = 1200;

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento01);
$listaOrcamentos->addOrcamento($orcamento02);
$listaOrcamentos->addOrcamento($orcamento03);

foreach ($listaOrcamentos as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qtd. Itens: " . $orcamento->quantidadeItens . PHP_EOL;
}

var_dump($listaOrcamentos->orcamentosFinalizados());
