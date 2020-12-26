<?php
class Caracteristica
{

  // Composição é um tipo de relacionamento entre objetos, é uma associação especial
  // Não possui apenas um apontamento para o outro, ele contém vários outros objetos
  // Chamado todo - parte
  // Um objeto maior que contém partes menores, objetos filhos

  private $nome;
  private $valor;

  public function __construct($nome, $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function getValor()
  {
    return $this->valor;
  }
}
