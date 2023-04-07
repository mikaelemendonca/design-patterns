<?php 

require 'vendor/autoload.php';

use Alura\DesingPatterns\CalculadoraDeImpostos;
use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Impostos\Icms;
use Alura\DesingPatterns\Impostos\Iss;

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss(new Icms()));
