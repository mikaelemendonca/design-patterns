<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\{GerarPedidoCommand, Orcamento, Pedido};
use Alura\DesingPatterns\AcoesAoGerarPedido\AcaoAposGerarPedido;

// class GerarPedidoHandler implements Command
class GerarPedidoHandler
{
    private array $acoesAposGerarPedido;

    public function __construct(
        /* PedidoRepository, MailService */
    ) {
    }

    public function adicionaAcaoAoGerarPedido(AcaoAposGerarPedido $acaoAposGerarPedido)
    {
        $this->acoesAposGerarPedido[] = $acaoAposGerarPedido;
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

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcoes($pedido);
        }
    }
}
