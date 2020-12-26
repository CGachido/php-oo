<?php
require_once 'classes/Produto.php';
require_once 'classes/Fabricante.php';

// Associação é quando um objeto possui um ponteiro para outro objeto
// Um objeto possui uma referencia para outro objeto, objeto A conhece objeto B
// Produto 0..* -> 1 Fabricante

$produto = new Produto('Chocolate', 10, 4);
$fabricante = new Fabricante('Fabricador', 'Rua 123', '11.111.1111/0001-11');

$produto->setFabricate($fabricante);

echo "<pre>";
var_dump($produto);
var_dump($fabricante);
echo "<hr>";

$nomeProduto = $produto->getDescricao();
$nomeFabricante = $produto->getFabricante()->getnome();
echo "O fabricante do produto {$nomeProduto} é {$nomeFabricante}";

echo "</pre>";
