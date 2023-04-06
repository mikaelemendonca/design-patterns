<?php

namespace Alura\DesignPattern\Relatorio;

interface ArquivoExportado
{
    // uma ponte entre o conteúdo e um formato de arquivo
    public function salvar(ConteudoExportado $conteudoExportado): string;
}
