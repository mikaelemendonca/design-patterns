<?php

namespace Alura\DesingPatterns\NotaFiscal;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocial;
    public array $itens;
    public string $observacoes;
    public \DateTimeInterface $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        $valorItens = 0;
        foreach ($this->itens as $item) {
            $valorItens += $item->valor;
        }
        return $valorItens;
    }
}
