<?php

$produto = new stdClass;

$produto->descricao = 'Chocolate';
$produto->estoque = 100;
$produto->preco = 2.5;

echo "<pre>";
var_dump($produto);
echo "</pre>";
