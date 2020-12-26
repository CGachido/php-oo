<?php
require_once 'classes/Record.php';

class Produto extends Record
{
  const TABLENAME = 'produtos';
}

$x = new Produto;
$x->nome = 'Chocolate';
$x->preco = 10;
print $x->save();
echo "<br>";
print $x->delete(10);
echo "<br>";
print $x->load(10);
echo "<br>";

// print $x->nome;
