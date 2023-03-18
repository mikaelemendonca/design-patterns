<?php

namespace Alura\DesingPatterns\EstadosOrcamento;

use Alura\DesingPatterns\Orcamento;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new \DomainException('Orçamento reprovados não podem receber descontos');
    }
}