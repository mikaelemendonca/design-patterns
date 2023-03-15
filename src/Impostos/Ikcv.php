<?php

namespace Alura\DesingPatterns\Impostos;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Impostos\ImpostoCom2Aliquotas;

class Ikcv extends ImpostoCom2Aliquotas
{
    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor > 300 && $orcamento->quantidade > 3;
    }
}
