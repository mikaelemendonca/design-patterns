<?php

use Alura\DesingPatterns\Http\CurlHttpAdapter;
use Alura\DesingPatterns\Http\ReactPHPHttpAdapter;
use Alura\DesingPatterns\RegistroOrcamento;
use Alura\DesingPatterns\Orcamento;

require 'vendor/autoload.php';

// $registroOrcamento = new RegistroOrcamento(new CurlHttpAdapter());
$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());
