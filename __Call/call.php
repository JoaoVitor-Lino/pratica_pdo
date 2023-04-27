<?php 
include_once 'Produto.php';

$produto = new Produto(1, 'Pendrive 512mb', 1, 345.67);

echo $produto->vender(10);
