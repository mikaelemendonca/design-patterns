<?php

namespace Alura\DesingPatterns\Venda;

use Alura\DesingPatterns\Impostos\Imposto;

interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
