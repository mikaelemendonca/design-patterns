<?php

namespace Alura\DesingPatterns;

use Alura\DesingPatterns\Orcamento;

class ListaDeOrcamentos implements \IteratorAggregate
{
    public array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados()
    {
        return array_filter(
            $this->orcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Alura\DesingPatterns\EstadosOrcamento\Finalizado
        );
    }
}
