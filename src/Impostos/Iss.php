<?php

namespace Alura\DesingPatterns\Impostos;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Impostos\Imposto;

class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
