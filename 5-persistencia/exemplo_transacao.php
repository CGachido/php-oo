<?php
require_once 'classes/ar/ProdutoTransaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';

try {
  Transaction::open('config');
  $produto = new ProdutoTransaction;
  $produto->descricao = 'Chocolate Amargo';
  $produto->estoque = 2;
  $produto->preco_custo = 59;
  $produto->preco_venda = 100;
  $produto->codigo_barras = '12321313124';
  $produto->data_cadastro = date("Y-m-d");
  $produto->origem = 'N';
  $produto->save();
  Transaction::close();
} catch (Exception $e) {
  $e->getMessage();
}
