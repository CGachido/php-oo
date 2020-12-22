<?php

// Classe final é uma classe que não deve ser extendida, impedir uma classe filha dela
// Impedir uma classe derivada dela
final class ContaPoupanca extends Conta
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
