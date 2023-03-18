<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

use Alura\DesingPatterns\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedido
{
    public function executaAcoes(Pedido $pedido): void
    {
        echo "Enviando e-mail do pedido" . PHP_EOL;
    }
}
