<?php

namespace Alura\DesingPatterns\Log;

abstract class LogManager
{
    public function log(string $severidade, string $mensagem)
    {
        $logWritter = $this->criarLogWritter();

        $dataHoje = date('d/m/Y');
        $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";
        $logWritter->escreve($mensagemFormatada);
    }

    abstract public function criarLogWritter(): LogWritter;
}
