<?php

class Venda
{
  private $id;
  private $itens;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function addItem($qtd, Produto $produto)
  {
    $this->itens[] = [$qtd, $produto];
  }

  public function getItens()
  {
    return $this->itens;
  }
}
