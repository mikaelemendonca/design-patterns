<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\Descontos\SemDesconto;
use Alura\DesingPatterns\Descontos\DescontoMais5Itens;
use Alura\DesingPatterns\Descontos\DescontoMais500Reais;

class CalculadoraDeDesconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        $cadeiaDescontos = new DescontoMais5Itens(
            new DescontoMais500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}
