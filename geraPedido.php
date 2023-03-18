<?php

require 'vendor/autoload.php';

use Alura\DesingPatterns\{GerarPedidoHandler, GerarPedidoCommand};
use Alura\DesingPatterns\AcoesAoGerarPedido\{
    CriarPedidoNoBanco,
    LogGerarPedido,
    EnviarPedidoPorEmail
};

// valores da linha de comando
$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedidoCommand = new GerarPedidoCommand($valorOrcamento, $numeroDeItens, $nomeCliente);
// precisa de uma injeção de dependência
$gerarPedidoHandler = new GerarPedidoHandler();

$gerarPedidoHandler->attach(new EnviarPedidoPorEmail());
$gerarPedidoHandler->attach(new CriarPedidoNoBanco());
$gerarPedidoHandler->attach(new LogGerarPedido());

// todas as regras em um comando
$gerarPedidoHandler->executa($geraPedidoCommand);

// php geraPedido.php 1500 5 "mikaele"
