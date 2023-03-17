<?php

namespace Alura\DesingPatterns\EstadosOrcamento;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\EstadosOrcamento\Aprovado;
use Alura\DesingPatterns\EstadosOrcamento\Reprovado;

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
}