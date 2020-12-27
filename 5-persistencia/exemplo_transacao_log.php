<?php
require_once 'classes/ar/ProdutoTransactionLog.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Transaction.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';

try {
  Transaction::open('config');
  Transaction::setLogger(new LoggerTXT('log.txt'));

  $produto = new ProdutoTransactionLog;
  $produto->descricao = 'Chocolate Branco';
  $produto->estoque = 22;
  $produto->preco_custo = 8;
  $produto->preco_venda = 18;
  $produto->codigo_barras = '4432423';
  $produto->data_cadastro = date("Y-m-d");
  $produto->origem = 'N';
  $produto->save();
  Transaction::close();
} catch (Exception $e) {
  print $e->getMessage();
}
