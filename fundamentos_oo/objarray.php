<?php
$produto = [];
$produto['descricao'] = 'Chocolate';
$produto['estoque'] = 100;
$produto['preco'] = 7;

$objeto = new stdClass;

// Criação de atributo dinamico
foreach ($produto as $chave => $valor) {
  $objeto->$chave = $valor;
}

echo "<pre>";
var_dump($objeto);
echo "</pre>";
