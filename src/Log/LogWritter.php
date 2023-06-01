<?php

namespace Alura\DesingPatterns\Log;

interface LogWritter
{
    public function escreve(string $mensagemFormatada): void;
}
