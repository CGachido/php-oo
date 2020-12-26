<?php
require_once 'classes/Produto.php';
require_once 'classes/Caracteristica.php';

// Composição é um tipo de relacionamento entre objetos, é uma associação especial
// Não possui apenas um apontamento para o outro, ele contém vários outros objetos
// Chamado todo - parte
// Um objeto maior que contém partes menores, objetos filhos
$produto = new Produto('Chocolate', 100, 5);

$produto->addCaracteristica('Cor', 'Marrom');
$produto->addCaracteristica('Peso', '500gr');

echo "<pre>";
print_r($produto);
echo "</pre>";
