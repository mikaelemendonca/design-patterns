<?php

namespace Alura\DesingPatterns\EstadosOrcamento;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\EstadosOrcamento\{Aprovado, Reprovado, Finalizado};

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $this->valor * 0.05;
    }

    public function reprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Reprovado();
    }

    public function aprova(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Aprovado();
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}