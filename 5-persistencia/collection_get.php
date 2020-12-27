<?php

require_once 'classes/api/Transaction.php';
require_once 'classes/api/Connection.php';
require_once 'classes/api/Criteria.php';
require_once 'classes/api/Repository.php';
require_once 'classes/api/Record.php';
require_once 'classes/api/Logger.php';
require_once 'classes/api/LoggerTXT.php';
require_once 'classes/model/Produto.php';


try {
  Transaction::open('config');
  Transaction::setLogger(new LoggerTXT('logs/log_collection_get.txt'));
  $criteria = new Criteria;

  $criteria->add('estoque', '>', 10);
  $criteria->add('origem', '=', 'N');

  $repository = new Repository('Produto');
  $produtos = $repository->load($criteria);

  echo "<pre>";
  var_dump($produtos);
  print "TOTAL DE PRODUTOS: " . $repository->count($criteria);
  echo "<br>";
  echo "</pre>";

  Transaction::close();
} catch (Exception $e) {

  Transaction::rollback();
  print $e->getMessage();
}
