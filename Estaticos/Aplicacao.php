<?php

class Aplicacao 
{
    /**
     * Método Estático 
     * lê o arquivo readme.txt 
     */

     static function Sobre()
     {
        $fd = fopen('readme.txt', 'r');

        while ($linha = fgets($fd, 200))
        {
            echo $linha ."\n";
        }
     }
}
echo "ïnformação sobre a aplicação : \n";
echo "============================:\n";

Aplicacao::Sobre();
?>