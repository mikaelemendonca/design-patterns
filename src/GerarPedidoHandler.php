<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\{GerarPedidoCommand, Orcamento, Pedido};

// class GerarPedidoHandler implements Command
class GerarPedidoHandler implements \SplSubject
{
    private array $acoesAposGerarPedido;
    public Pedido $pedido;

    public function __construct(
        /* PedidoRepository, MailService */
    ) {
    }

    public function attach(\SplObserver $observer)
    {
        $this->acoesAposGerarPedido[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
    }

    public function notify()
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            // $acao->update($this);
            $acao->update($this->pedido);
        }
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

        $this->pedido = $pedido;
        $this->notify();
    }
}
