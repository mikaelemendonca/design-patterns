<?php

namespace Alura\DesingPatterns\Impostos;

use Alura\DesingPatterns\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizaCalculoEspecifico(Orcamento $orcamento): float;

    public function calculaImposto(Orcamento $orcamento): float
    {
        return 
            $this->realizaCalculoEspecifico($orcamento) +
            $this->realizaCalculoOutroEspecifico($orcamento);
    }

    private function realizaCalculoOutroEspecifico(Orcamento $orcamento): float
    {
        return $this->outroImposto === null
            ? 0
            : $this->outroImposto->realizaCalculoEspecifico($orcamento);
    }
}
