<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

use Alura\DesingPatterns\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcoes(Pedido $pedido): void;
}
