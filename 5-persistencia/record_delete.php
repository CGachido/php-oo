<?php

require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/api/Record.php';
require_once 'classes/model/Produto.php';


try {
  Transaction::open('config');
  Transaction::setLogger(new LoggerTXT('logs/logo_novo.txt'));
  $p1 = new Produto(4);
  $p1 = Produto::find(4);
  $p1->delete();


  Transaction::close();
} catch (Exception $e) {

  Transaction::rollback();
  print $e->getMessage();
}
