<?php

namespace Alura\DesingPatterns\Venda;

abstract class Venda
{
    public \DateTimeInterface $dataRealizacao;

    public function __construct(
        \DateTimeInterface $dataRealizacao
    ) {
        $this->dataRealizacao = $dataRealizacao;
    }
}
