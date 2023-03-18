<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

use Alura\DesingPatterns\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcoes(Pedido $pedido): void
    {
        echo "Gerando log do pedido" . PHP_EOL;
    }
}
