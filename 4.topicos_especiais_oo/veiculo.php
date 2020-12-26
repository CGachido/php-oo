<?php

class Veiculo
{
  // Reflection, maneira de investigarmos nosso próprio código fonte..
  // Descobrir metodos, caracteristicas e propriedades

  protected $ano;
  protected $cor;
  protected $marca;
  protected $parts;

  public function getParts()
  {
  }

  public function setMarca($marca)
  {
  }
}

class Automovel extends Veiculo
{
  private $placa;
  const RODAS = 4;

  public function setPlaca($placa)
  {
  }

  public function getPlaca()
  {
  }
}
