<?php 
include_once 'Produto.php';

#Cria novo produto com o preço R$345.67

$produto = new Produto(1, 'Pendrive 512mb', 2, 345.67);

echo $produto->Preco;