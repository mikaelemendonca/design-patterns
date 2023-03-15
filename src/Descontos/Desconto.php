<?php

namespace Alura\DesingPatterns\Descontos;

use Alura\DesingPatterns\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    // public function calcula(Orcamento $orcamento)
    // {
    //     $calculo = $this->calculaDesconto($orcamento);
    //     if ($calculo === 0) {
    //         $this->proximoDesconto($orcamento);
    //     }

    //     return $calculo;
    // }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}