<?php
include "Aplicacao.php"; 

#Cria novos objetos

new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo "Quantidade de Aplicações = ". Aplicacao::$Quantidade ."\n";
?>