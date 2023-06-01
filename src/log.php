<?php

use Alura\DesingPatterns\Log\{
    StdoutLogManager,
    FileLogManager
};

require 'vendor/autoload.php';

$logManager = new StdoutLogManager();
$logManager->log('info', 'Testando log manager');
