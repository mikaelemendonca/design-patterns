<?php

namespace Alura\DesingPatterns\Pedido;

use Alura\DesingPatterns\Orcamento;

class CriadorPedido
{
    private $templates = [];

    private function gerarTemplate(
        string $nomeCliente,
        string $dataFormatada,
    ): TemplatePedido {
        $hash = md5($nomeCliente . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) {
            $this->templates[$hash] =  new TemplatePedido(
                $nomeCliente,
                new \DateTimeImmutable($dataFormatada)
            );
        }

        return $this->templates[$hash];
    }

    public function criaPedido(
        string $nomeCliente,
        string $dataFormatada,
        Orcamento $orcamento
    ): Pedido {
        $template = $this->gerarTemplate(
            $nomeCliente,
            $dataFormatada
        );

        $pedido = new Pedido();
        $pedido->dados = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }
}
