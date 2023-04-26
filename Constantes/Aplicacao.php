<?php
include "Biblioteca.php";

class Aplicacao extends Biblioteca 
{
    //declaração das constantes
    const AMBIENTE = "Gnome Desktop ";
    const VERSAO = "3.8";

    /* Método construtor 
       acessa as constantes internamente
    */

    function __construct($nome)
    {
        echo parent::NOME . self::AMBIENTE . self::VERSAO  . "\n";
    }


}
?>