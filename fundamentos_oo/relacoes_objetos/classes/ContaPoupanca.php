<?php
class ContaPoupanca extends Conta
{
  public function retirar($quantia)
  {
    if ($this->saldo < $quantia) {
      return false;
    }

    $this->saldo -= $quantia;
    return true;
  }
}
