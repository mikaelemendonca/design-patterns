<?php

namespace Alura\DesingPatterns\Venda;

use Alura\DesingPatterns\Impostos\Iss;
use Alura\DesingPatterns\Impostos\Imposto;

class VendaServicoFactory implements VendaFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(
            new \DateTimeImmutable(),
            $this->nomePrestador
        );
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }
}
