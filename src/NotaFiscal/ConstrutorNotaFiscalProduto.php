<?php

namespace Alura\DesingPatterns\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
    public function constroi(): NotaFiscal
    {
        $valorNota = $this->notaFiscal->valor();
        $this->notaFiscal->valorImpostos = $valorNota * 0.02;

        return $this->notaFiscal;
    }
}
