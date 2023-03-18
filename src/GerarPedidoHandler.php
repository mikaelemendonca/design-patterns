<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\{GerarPedidoCommand, Orcamento, Pedido};
use Alura\DesingPatterns\AcoesAoGerarPedido\{
    CriarPedidoNoBanco,
    LogGerarPedido,
    EnviarPedidoPorEmail
};

// class GerarPedidoHandler implements Command
class GerarPedidoHandler
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

        $pedidoRepository = new CriarPedidoNoBanco();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();

        $pedidoRepository->executaAcoes();
        $logGerarPedido->executaAcoes();
        $enviarPedidoPorEmail->executaAcoes();
    }
}
