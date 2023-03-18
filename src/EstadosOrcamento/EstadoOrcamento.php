<?php

namespace Alura\DesingPatterns\EstadosOrcamento;

use Alura\DesingPatterns\Orcamento;

abstract class EstadoOrcamento
{
    /**
     * @throws \DomainException
     */
    abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

    public function aprova(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser aprovado.');
    }

    public function reprovado(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser reprovado.');
    }

    public function finalizado(Orcamento $orcamento)
    {
        throw new \DomainException('Este orçamento não pode ser finalizado.');
    }
}