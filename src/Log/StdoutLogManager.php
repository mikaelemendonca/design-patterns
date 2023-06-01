<?php

namespace Alura\DesingPatterns\Log;

class StdoutLogManager extends LogManager
{
    public function criarLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}
