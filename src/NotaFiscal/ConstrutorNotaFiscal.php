<?php

namespace Alura\DesingPatterns\NotaFiscal;

use Alura\DesingPatterns\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function paraEmpresa(
        string $cnpj,
        string $razaoSocial
    ) {
        $this->notaFiscal->cnpjEmpresa = $cnpj;
        $this->notaFiscal->razaoSocial = $razaoSocial;

        return $this;
    }

    public function comItem(ItemOrcamento $item)
    {
        $this->notaFiscal->itens[] = $item;
        return $this;
    }

    public function comObservacoes(string $obs)
    {
        $this->notaFiscal->observacoes = $obs;
        return $this;
    }

    public function comDataEmissao(\DateTimeInterface $data)
    {
        $this->notaFiscal->dataEmissao = $data;
        return $this;
    }

    abstract public function constroi(): NotaFiscal;
}
