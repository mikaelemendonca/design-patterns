<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

use Alura\DesingPatterns\Pedido;

class EnviarPedidoPorEmail implements SplObserver
{
    public function update(SplSubject $pedido): void
    {
        echo "Enviando e-mail do pedido para " . $pedido->pedido->nomeCliente . PHP_EOL;
    }
}
