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

  public function __toString()
  {
    return json_encode($this->data);
  }
}

$tit = new Titulo;
$tit->valor = 100;
$tit->nome  = 'teste';


print $tit;
