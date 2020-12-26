<?php

class Orcamento
{
  private $itens;

  public function adiciona(Produto $produto, $qtd)
  {
    $this->itens[] = [$qtd, $produto];
  }

  public function calculaTotal()
  {
    $total = 0;
    foreach ($this->itens as $item) {
      $total += ($item[0] * $item[1]->getPreco());
    }

    return $total;
  }
}
