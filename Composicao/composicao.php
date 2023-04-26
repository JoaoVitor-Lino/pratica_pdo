<?php
include_once 'Fornecerdor.php';
include_once 'Contato.php';

#Instancia novo Fornecedor
$fornecedor = new Fornecedor;
$fornecedor->RazaoSocial ='Produtos Bom Gosto S.A';

#Atribui nformações ao contato
$fornecedor->setContato('Mauro', '51 1234-5678', 'mauro@bomgosto.com.br');

#Imprime Informações 
echo $fornecedor->RazaoSocial . "\n";
echo "Informações de Contato \n";
echo $fornecedor->getContato() ."\n";