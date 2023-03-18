<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

use Alura\DesingPatterns\Pedido;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}
