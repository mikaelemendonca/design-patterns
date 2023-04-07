<?php

namespace Alura\DesingPatterns\Impostos;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Impostos\Imposto;

class Iss extends Imposto
{
    public function realizaCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
