<?php

require_once "classes/ar/Produto.php";
require_once "classes/api/Connection.php";

try {
  $conn = Connection::open('config');
  Produto::setConnection($conn);
  $produto = new Produto;
  $produto->descricao = 'Café Torrado';
  $produto->estoque = 5;
  $produto->preco_custo = 10;
  $produto->preco_venda = 15;
  $produto->codigo_barras = "0912301203";
  $produto->data_cadastro = date("Y-m-d");
  $produto->origem = "N";
  $produto->save();
} catch (Exception $e) {
  print $e->getMessage();
}
