<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

use Alura\DesingPatterns\Pedido;

class LogGerarPedido implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Gerando log do pedido" . PHP_EOL;
    }
}
