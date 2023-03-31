<?php

require 'vendor/autoload.php';

use \Alura\DesignPattern\Orcamento;
use \Alura\DesignPattern\Relatorio\OrcamentoZip;

$orcamento = new Orcamento();
$orcamento->valor = 500;

$orcamentoZip = new OrcamentoZip();
$orcamentoZip->exportar($orcamento);
