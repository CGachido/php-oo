<?php

class Titulo
{
  public $codigo, $vencimento, $valor, $juros, $multa;

  public function __call($method, $values)
  {
    return call_user_func($method, get_object_vars($this));
  }
}


$titulo = new Titulo;
$titulo->codigo = 1;
$titulo->vencimento = '2020-10-10';
$titulo->valor = 100;
$titulo->multa = 4;

echo "<pre>";
$titulo->print_r();
echo "<hr>";
print $titulo->count();
echo "<hr>";
print $titulo->json_encode();
echo "</pre>";
