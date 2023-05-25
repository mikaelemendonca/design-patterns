<?php

namespace Alura\DesingPatterns\Pedido;

class TemplatePedido
{
    private string $nomeCliente;
    private \DateTimeInterface $dataFinalizacao;

    // deixando os dados imutáveis
    public function __construct(string $nome, \DateTimeInterface $data)
    {
        $this->nomeCliente = $nome;
        $this->dataFinalizacao = $data;
    }

    public function nomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function dataFinalizacao(): \DateTimeInterface
    {
        return $this->dataFinalizacao;
    }
}
