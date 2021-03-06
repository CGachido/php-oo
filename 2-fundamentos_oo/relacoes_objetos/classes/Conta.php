<?php

// Uma classe abstrata é uma classe incompleta, serva para estruturar outras classes
// Seu propósito é construir outras classes derivadas a partir dela
// Proposito de ser base

abstract class Conta
{
  protected $agencia;
  protected $conta;
  protected $saldo;

  public function __construct($agencia, $conta, $saldo)
  {
    $this->agencia = $agencia;
    $this->conta = $conta;
    if ($saldo > 0) {
      $this->saldo = $saldo;
    }
  }

  public function depositar($quantia)
  {
    if ($quantia > 0) {
      $this->saldo += $quantia;
    }
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  public function getInfo()
  {
    return "Agência {$this->agencia}, Conta {$this->conta}";
  }

  // Um metodo abstrato é um metodo que gostariamos de forçar a implementação nas classes filhas;
  // Somente uma assinatura
  // Qualquer classe filha que extender essa conta, deve implementar esse método
  abstract function retirar($quantia);
}
