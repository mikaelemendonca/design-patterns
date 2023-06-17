<?php

namespace Alura\DesingPatterns\Relatorio;

use Alura\DesingPatterns\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidadeItens' => $this->orcamento->quantidadeItens,
        ];
    }
}
