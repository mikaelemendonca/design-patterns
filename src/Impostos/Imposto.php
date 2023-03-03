<?php

namespace Alura\DesingPatterns\Impostos;

use Alura\DesingPatterns\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
