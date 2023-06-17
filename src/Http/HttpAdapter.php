<?php

namespace Alura\DesingPatterns\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}
