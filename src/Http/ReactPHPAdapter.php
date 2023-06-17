<?php

namespace Alura\DesingPatterns\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // implementação
        echo "React PHP";
    }
}
