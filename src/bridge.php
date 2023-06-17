<?php

require 'vendor/autoload.php';

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Pedido\Pedido;
use Alura\DesingPatterns\Relatorio\ArquivoXmlExportado;
use Alura\DesingPatterns\Relatorio\OrcamentoExportado;
use Alura\DesingPatterns\Relatorio\ArquivoZipExportado;
use Alura\DesingPatterns\Relatorio\PedidoExportado;

// use Alura\DesingPatterns\Relatorio\OrcamentoZip;


$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

// $orcamentoZip = new OrcamentoZip();
// $orcamentoZip->exportar($orcamento);

$orcamentoExportado = new OrcamentoExportado($orcamento);

$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');
echo $orcamentoExportadoXml->salvar($orcamentoExportado);

$orcamentoExportadoXml = new ArquivoZipExportado('orcamento.array');
echo $orcamentoExportadoXml->salvar($orcamentoExportado);

$pedido = new Pedido();
$pedido->nomeCliente = 'Mikaele Mendonça';
$pedido->dataFinalizacao = new \DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoXml = new ArquivoXmlExportado('orcamento');
echo $pedidoExportadoXml->salvar($pedidoExportado);
