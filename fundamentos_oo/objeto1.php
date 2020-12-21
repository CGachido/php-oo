<?php

class Produto
{
  // public, private, protected
  public $descricao;
  public $estoque;
  public $preco;
}

$produto1 = new Produto();
$produto1->descricao = 'Chocolate';
$produto1->estoque = 10;
$produto1->preco = 5;

$produto2 = new Produto();
$produto2->descricao = 'Café';
$produto2->estoque = 20;
$produto2->preco = 6;

echo "<pre>";
var_dump($produto1);
var_dump($produto2);
echo "</pre>";
