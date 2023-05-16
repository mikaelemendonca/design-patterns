<?php

use Alura\DesingPatterns\DadosExtrinsecosPedido;
use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Pedido;

require 'vendor/autoload.php';

$dados = new DadosExtrinsecosPedido(
    md5('a'),
    new \DateTimeImmutable()
);

$pedidos = [];
for ($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->orcamento = new Orcamento();
    $pedido->dados = $dados;

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
