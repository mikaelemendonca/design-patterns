<?php

use Alura\DesingPatterns\PdoConnection;

require 'vendor/autoload.php';

$pdo = PdoConnection::getInstancia('sqlite::memory:');
// $pdo->query('');

$pdo2 = PdoConnection::getInstancia('sqlite::memory:');
// $pdo->query('');

var_dump($pdo, $pdo2);
