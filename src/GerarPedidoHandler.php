<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\{Command, Orcamento, Pedido};

class GerarPedidoHandler implements Command
{
    public function __construct(
        /* PedidoRepository, MailService */
    ) {
    }

    public function executa(GerarPedidoCommand $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroDeItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        // PedidoRepository
        echo "Cria pedido no banco de dados " . PHP_EOL;
        // MailService
        echo "Envia e-mail para cliente " . PHP_EOL;
    }
}
