<?php

namespace Alura\DesingPatterns\Relatorio;

use Alura\DesingPatterns\Orcamento;

class OrcamentoXml
{
    public function exportar(Orcamento $orcamento)
    {
        $elementoOrcamento = new \SimpleXMLElement('<orcamento\>');
        $elementoOrcamento->addChild('valor', $orcamento->valor);
        $elementoOrcamento->addChild('quantidade_itens', $orcamento->quantidadeItens);

        return $elementoOrcamento->asXML();
    }
}
