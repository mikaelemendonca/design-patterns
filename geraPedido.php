<?php

require 'vendor/autoload.php';

use Alura\DesingPatterns\{GerarPedidoHandler, geraPedidoCommand};

// valores da linha de comando
$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$geraPedidoCommand = new geraPedidoCommand($valorOrcamento, $numeroDeItens, $nomeCliente);
// precisa de uma injeção de dependência
$gerarPedidoHandler = new GerarPedidoHandler();
// todas as regras em um comando
$gerarPedidoHandler->executa($geraPedidoCommand);
