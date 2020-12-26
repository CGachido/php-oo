<?php

class Produto
{
  // public, private, protected
  private $descricao;
  private $estoque;
  private $preco;
}

$produto1 = new Produto();
$produto1->descricao = 'Chocolate';
$produto1->estoque = 10;
$produto1->preco = 5;
