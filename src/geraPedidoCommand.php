<?php

namespace Alura\DesingPatterns;

class geraPedidoCommand
{
    private float $valorOrcamento;
    private int $numeroDeItens;
    private string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroDeItens,
        string $nomeCliente
    ) {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function getNumeroDeItens(): int
    {
        return $this->numeroDeItens;
    }

    public function getNomeCliente(): int
    {
        return $this->nomeCliente;
    }
}
