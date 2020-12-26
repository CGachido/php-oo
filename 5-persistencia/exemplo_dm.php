<?php

require_once 'classes/dm/Produto.php';
require_once 'classes/dm/Venda.php';
require_once 'classes/dm/VendaMapper.php';


try {
  $produto = new Produto;
  $produto->id = 1;
  $produto->descricao = 'Pepsi';
  $produto->estoque = 8;
  $produto->preco = 5;

  $venda = new Venda;
  $venda->addItem(12, $produto);

  $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  VendaMapper::setConnection($conn);

  VendaMapper::save($venda);
} catch (Exception $e) {
  print $e->getMessage();
}
