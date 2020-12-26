<?php

require_once 'classes/tdg/ProdutoGateway.php';


try {
  $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ProdutoGateway::setConnection($conn);

  $data = new stdClass;

  $data->descricao = 'Vinho';
  $data->estoque = 8;
  $data->preco_custo = 18;
  $data->preco_venda = 28;
  $data->codigo_barras = '01239444444';
  $data->data_cadastro = date("Y-m-d");
  $data->origem = 'N';

  $gw = new ProdutoGateway;
  $gw->save($data);

  $gw = new ProdutoGateway;
  $produto = $gw->find(1);
  $produto->estoque += 2;
  $gw->save($produto);

  $gw = new ProdutoGateway;
  foreach ($gw->all(" estoque <= 10") as $produto) {
    print_r($produto);
  }
} catch (Exception $e) {
  print $e->getMessage();
}
