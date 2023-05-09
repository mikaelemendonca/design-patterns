<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\Descontos\SemDesconto;
use Alura\DesingPatterns\Descontos\DescontoMais5Itens;
use Alura\DesingPatterns\Descontos\DescontoMais500Reais;

class CalculadoraDeDesconto
{
    // uma faixada para um sistema o qual faz uma série de ações que quem for usar a calculadora não precisa saber
    public function calculaDesconto(Orcamento $orcamento): float
    {
        // cadeia de descontos
        $cadeiaDescontos = new DescontoMais5Itens(
            new DescontoMais500Reais(
                new SemDesconto()
            )
        );

        // cálculo do desconto
        $descontoCalculado = $cadeiaDescontos->calculaDesconto($orcamento);

        // log
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}
