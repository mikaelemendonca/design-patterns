<?php

namespace Alura\DesingPatterns;

class ItemOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        // simulando a demora de acessoa a API
        sleep(1);
        return $this->valor;
    }
}
