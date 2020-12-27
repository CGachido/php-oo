<?php

use FFI\Exception;

require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/api/Record.php';
require_once 'classes/model/Produto.php';


try {
  Transaction::open('config');
  Transaction::setLogger(new LoggerTXT('logs/logo_novo.txt'));
  $p1 = new Produto;
  $p1->descricao = 'Cerveja IPA';
  $p1->estoque = 50;
  $p1->preco_custo = 8;
  $p1->preco_venda = 13;
  $p1->codigo_barras = "23123122";
  $p1->origem = 'N';
  $p1->data_cadastro = date('Y-m-d');
  $p1->store();

  Transaction::close();
} catch (Exception $e) {

  Transaction::rollback();
  print $e->getMessage();
}
