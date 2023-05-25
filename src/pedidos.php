<?php

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Pedido\{CriadorPedido};

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorPedido();

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'Mikaele Costa',
        date('Y-m-d'),
        $orcamento
    );

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();
