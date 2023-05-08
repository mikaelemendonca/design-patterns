<?php

namespace Alura\DesingPatterns;

class ItemOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        return $this->valor;
    }
}
