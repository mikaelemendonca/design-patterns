<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\ItemOrcamento;
use Alura\DesingPatterns\EstadosOrcamento\EstadoOrcamento;
use Alura\DesingPatterns\EstadosOrcamento\EmAprovacao;

class Orcamento implements Orcavel
{
    private array $itens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;
    
    public function __construct()
    {
        $this->estadoAtual = new EmAprovacao();
        $this->itens = [];
    }

    public function addItem(Orcavel $item)
    {
        $this->itens[] = $item;
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprovado($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finalizado($this);
    }

    public function valor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
            0
        );
    }
}
