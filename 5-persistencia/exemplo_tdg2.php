<?php
require_once 'classes/tdg/Produto.php';
require_once 'classes/tdg/ProdutoGateway.php';


try {
  $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  Produto::setConnection($conn);

  $produtos = Produto::all();

  foreach ($produtos as $produto) {
    $produto->delete();
  }
  $produto = new Produto;
  $produto->descricao = 'Coca-cola';
  $produto->estoque = 8;
  $produto->preco_custo = 5;
  $produto->preco_venda = 10;
  $produto->codigo_barras = '01239444444';
  $produto->data_cadastro = date("Y-m-d");
  $produto->origem = 'N';
  $produto->save();

  $outro = Produto::find(1);

  print "Descrição: {$outro->descricao} <br>";
  print "ML: {$outro->getMargemLucro()} <br>";
  $outro->registraCompra(14, 8);
  $outro->save();
} catch (Exception $e) {
  print $e->getMessage();
}
