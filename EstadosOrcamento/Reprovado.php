<?php

namespace Alura\DesingPatterns\EstadosOrcamento;

use Alura\DesingPatterns\Orcamento;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamento reprovados não podem receber descontos');
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado;
    }
}