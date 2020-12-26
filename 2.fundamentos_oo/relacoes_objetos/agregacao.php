<?php

require_once 'classes/Cesta.php';
require_once 'classes/Produto.php';

// Agregação é um tipo de associação, TODO - PARTES
// Cesta <> -> Produto
// Objetos criados de maneira separadas e depois reunidos
// Vários objetos de um tipo dentro do outro, mas são criados separados
// São criados foras de depois relacionados
// Uma parte pode fazer parte de um objeto, mas pode fazer parte de outros objetos também
// Composição só existe para um "objeto"
// Quando excluimos o todo a parte continua existindo
// N - N 

$cesta = new Cesta;
$produto = new Produto('Chocolate', 100, 5);
$produto2 = new Produto('Café', 200, 3.5);
$produto3 = new Produto('Mostarda', 33, 12);

$cesta->addItem($produto);
$cesta->addItem($produto2);
$cesta->addItem($produto3);

echo "<pre>";
print_r($cesta);
echo "</pre>";
