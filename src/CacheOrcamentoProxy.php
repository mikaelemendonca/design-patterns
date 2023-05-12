<?php

namespace Alura\DesingPatterns;

class CacheOrcamentoProxy extends Orcamento
{
    private $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function addItem(Orcavel $item)
    {
        throw new \DomainException("Não é possível adicionar item em um orçamento cacheado", 1);
    }

    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}
