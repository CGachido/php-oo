<?php

$produto = new stdClass;

$produto->descricao = 'Chocolate';
$produto->estoque = 100;
$produto->preco = 2.5;

$vetor = (array) $produto;

$vetor2 = [
  'descricao' => 'Café',
  'estoque' => 100,
  'preco' => 3.5,
];
$produto2 = (object) $vetor2;

echo "<pre>";
var_dump($produto);
var_dump($vetor);

echo "<hr>";

var_dump($vetor2);
var_dump($produto2);

echo "</pre>";
