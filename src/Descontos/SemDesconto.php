<?php

namespace Alura\DesingPatterns\Descontos;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Descontos\Desconto;

class SemDesconto extends Desconto
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
