<?php

namespace Instancia;

class Singleton
{

    protected static $instancia;

    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}

    public static function obterInstancia(): self
    {
        if(empty(self::$instancia))
        {
            self::$instancia = new self();
        }

        return self::$instancia;
    }
    
}
