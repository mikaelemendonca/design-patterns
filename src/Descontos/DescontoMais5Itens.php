<?php

namespace Alura\DesingPatterns\Descontos;

use Alura\DesingPatterns\Orcamento;
use Alura\DesingPatterns\Descontos\Desconto;

class DescontoMais5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}
