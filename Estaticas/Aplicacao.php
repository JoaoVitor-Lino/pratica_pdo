<?php

class Aplicacao 
{
    static $Quantidade;

    /**
     * Metodo Construtor
     * Incrementa a $Quantidade de Aplicações
     */

    function __construct($Nome)
    {
        self::$Quantidade ++;

        $i = self::$Quantidade;

        echo "Nova Aplicação nr. $i: $Nome \n";
    }
}
?>