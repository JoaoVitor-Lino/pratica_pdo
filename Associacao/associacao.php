<?php
include_once 'Fornecedor.php';
include_once 'Produto.php';

$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom Gosto Alimentos S.A';
$fornecedor->Endereco = 'Rua Ipiranga';
$fornecedor->Cidade = 'Poços de Caldas';

$produto = new Produto;
$produto->Codigo = 462;
$produto->Descricao = 'Doce de Pêssego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

echo 'Código          : ' . $produto->Codigo . "\n";
echo 'Descricão       : ' . $produto->Descricao . "\n";
echo 'Código          : ' . $produto->Fornecedor->Codigo . "\n";
echo 'Razão Social    : ' . $produto->Fornecedor->RazaoSocial . "\n";