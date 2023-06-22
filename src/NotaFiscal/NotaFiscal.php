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

    public function clonar(): NotaFiscal
    {
        $cloneNota = new NotaFiscal();
        $cloneNota->cnpjEmpresa = $this->cnpjEmpresa;
        $cloneNota->razaoSocial = $this->razaoSocial;
        $cloneNota->itens = $this->itens;
        $cloneNota->observacoes = $this->observacoes;
        $cloneNota->dataEmissao = $this->dataEmissao;
        $cloneNota->valorImpostos = $this->valorImpostos;

        return $cloneNota;
    }

    public function __clone()
    {
        $this->dataEmissao = new \DateTimeImmutable();
    }
}
