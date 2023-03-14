<?php

namespace Alura\DesingPatterns\Descontos;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Descontos\Desconto;

class DescontoMais500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
