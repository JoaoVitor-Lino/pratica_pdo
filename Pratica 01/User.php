<?php 
//include_once 'ContaCorrente.php';
include_once 'ContaPoupanca.php';

//$joao[0]= new ContaCorrente(1001, 1313, "18/04/2023", "João Vitor", "@Mudar123", false, 200,1001);
$joao[1] = new ContaPoupanca(1001, 1414, "18/04/2023", "João Vitor2", "@Mudar123", true, 500,2002);
//var_dump($joao[0]);
var_dump($joao[1]);
// var_dump($joao->getAgencia());
// $joao->depositar(12);
// $joao->retirar(20);
//print $joao[0]->getLimite();
print $joao[1]->getsaldo();
?>