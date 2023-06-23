<?php

namespace Alura\DesingPatterns;

class PdoConnection extends \PDO
{
    private static ?self $instancia = null;

    private function __construct(
        string $dsn,
        ?string $user = null,
        ?string $password = null,
        ?string $options = null
    ) {
        parent::__construct($dsn, $user, $password, $options);
    }

    public static function getInstancia(
        string $dsn,
        ?string $user = null,
        ?string $password = null,
        ?string $options = null
    ) {
        if (is_null(self::$instancia)) {
            self::$instancia = new static(
                $dsn,
                $user,
                $password,
                $options
            );
        }

        return self::$instancia;
    }
}
