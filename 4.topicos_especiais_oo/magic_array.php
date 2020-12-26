<?php

class Titulo
{
  private $data;

  public function __get($prop)
  {
    return $this->data[$prop];
  }

  public function __set($prop, $value)
  {
    $this->data[$prop] = $value;
  }

  public function __isset($prop)
  {
    return isset($this->data[$prop]);
  }

  public function __unset($prop)
  {
    unset($this->data[$prop]);
  }
}


$tit = new Titulo;
$tit->valor = 100;
$tit->nome  = 'teste';

if (isset($tit->valor)) {
  print "tem valor";
}

echo "<pre>";
print_r($tit);
unset($tit->valor);
print_r($tit);
echo "</pre>";
