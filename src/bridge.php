<?php

require 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};
// use Alura\DesignPattern\Relatorio\OrcamentoZip;

use Alura\DesignPattern\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\{ArquivoXmlExportado, ArquivoZipExportado};

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
$pedido->datFinalizacao = new DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoXml = new ArquivoXmlExportado('orcamento');
echo $pedidoExportadoXml->salvar($pedidoExportado);
