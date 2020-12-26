<?php

class Titulo
{
  private $dt_vencimento;
  private $valor;

  public function __construct($dt_vencimento, $valor)
  {
    print "Método construtor <br>";
    $this->dt_vencimento = $dt_vencimento;
    $this->valor = $valor;
  }

  public function __get($prop)
  {
    if ($prop === 'valor') {
      return  $this->$prop *= 1.2 .  " <br> ";
    }
    print "Tentou acessar {$prop} <br>";
  }

  public function __set($prop, $value)
  {
    if ($prop === 'valor') {
      $this->$prop = $value;
    }
  }

  public function __destruct()
  {
    print "Método destrutor <br>";
  }
}

$tit = new Titulo('2018-10-10', 100);
$tit->setValor(200);
print $tit->teste;

$tit->valor = 100;

print_r($tit);
unset($tit);
