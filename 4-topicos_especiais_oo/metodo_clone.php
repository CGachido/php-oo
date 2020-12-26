<?php

class Titulo
{
  public $codigo, $vencimento, $valor, $juros, $multa;

  public function __clone()
  {
    $this->codigo = null;
  }
}

$titulo = new Titulo;
$titulo->codigo = 1;
$titulo->vencimento = '2020-10-10';
$titulo->valor = 10;

echo "<pre>";
print_r($titulo);
$titulo2 = clone $titulo;
$titulo2->valor = 200;
echo "<hr>";
print_r($titulo);
print_r($titulo2);

echo "</pre>";
