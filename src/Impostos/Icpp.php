<?php

namespace Alura\DesingPatterns\Impostos;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Impostos\ImpostoCom2Aliquotas;

class Icpp extends ImpostoCom2Aliquotas
{
    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor > 500;
    }
}
