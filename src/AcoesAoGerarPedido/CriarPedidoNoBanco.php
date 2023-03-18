<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

use Alura\DesingPatterns\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedido
{
    public function executaAcoes(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}
