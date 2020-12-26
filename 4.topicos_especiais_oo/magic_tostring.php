<?php
class Titulo
{
  private $vencimento;
  private $valor;

  public function __construct($vencimento, $valor)
  {
    $this->vencimento = $vencimento;
    $this->valor = $valor;
  }

  public function __toString()
  {
    return "Valor {$this->valor}, Vencimento {$this->vencimento}";
  }
}


$tit = new Titulo(100, '2020-10-10');

print "Título: " . $tit;
echo "<br>";
