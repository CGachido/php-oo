<?php

class Produto
{
  // Associação é quando um objeto possui um ponteiro para outro objeto
  // Um objeto possui uma referencia para outro objeto, objeto A conhece objeto B
  // Produto 0..* -> 1 Fabricante

  private $descricao;
  private $estoque;
  private $preco;
  private $fabricante;

  public function __construct($descricao, $estoque, $preco)
  {
    $this->descricao = $descricao;
    $this->estoque = $estoque;
    $this->preco = $preco;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function setFabricate(Fabricante $fabricante)
  {
    $this->fabricante = $fabricante;
  }

  public function getFabricante()
  {
    return $this->fabricante;
  }
}
