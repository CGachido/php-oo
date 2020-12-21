<?php
require_once 'classes/Produto.php';
require_once 'classes/Caracteristica.php';

$produto = new Produto('Chocolate', 100, 5);

$produto->addCaracteristica('Cor', 'Marrom');
$produto->addCaracteristica('Peso', '500gr');

echo "<pre>";
print_r($produto);
echo "</pre>";
