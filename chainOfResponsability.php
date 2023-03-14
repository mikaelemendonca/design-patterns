<?php 

require 'vendor/autoload.php';

use Alura\DesingPatterns\CalculadoraDeDesconto;
use Alura\DesingPatterns\Orcamento;

$calculadora = new CalculadoraDeDesconto();

$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeItens = 7;

echo $calculadora->calculaDesconto($orcamento);
