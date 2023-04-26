<?php
include "Aplicacao.php";

    //Acessa as constantes externamente

    echo Biblioteca::NOME . Aplicacao::AMBIENTE . Aplicacao::VERSAO . "\n";

    new Aplicacao('Dia');
    new Aplicacao('Gimp');
?>