<?php

namespace Alura\DesingPatterns\Log;

class StdoutLogWritter implements LogWritter
{
    public function escreve(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}
