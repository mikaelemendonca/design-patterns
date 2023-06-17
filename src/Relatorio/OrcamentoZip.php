<?php

namespace Alura\DesingPatterns\Relatorio;

use Alura\DesingPatterns\Orcamento;

class OrcamentoZip
{
    public function exportar(Orcamento $orcamento)
    {
        $caminhoArquivo = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'orcamento.zip';
        $zip = new \ZipArchive();
        $zip->open($caminhoArquivo, \ZipArchive::CREATE);
        $zip->addFromString('orcamento.serialteste', serialize($orcamento));
        $zip->close();
    }
}
