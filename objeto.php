<?php

include_once 'produto.php';

$produto = new Produto;

$produto->codigo = 10;
$produto->descricao = 'The best of Eric Clapton';

print_r($produto);

?>