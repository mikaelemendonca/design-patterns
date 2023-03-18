<?php

namespace Alura\DesingPatterns\AcoesAoGerarPedido;

class CriarPedidoNoBanco
{
    public function executaAcoes(Pedido $pedido)
    {
        echo "Salvando pedido no banco de dados";
    }
}
