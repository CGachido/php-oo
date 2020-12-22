<?php
class ContaCorrente extends Conta
{
  protected $limite;

  public function __construct($agencia, $conta, $saldo, $limite)
  {
    parent::__construct($agencia, $conta, $saldo);
    $this->limite = $limite;
  }


  // Metodo final é quando não queremos que seja modificado na classe filha
  // Não pode mais ser redefinido em classes filhas
  public final function retirar($quantia)
  {
    if ($this->saldo + $this->limite >= $quantia) {
      $this->saldo -= $quantia;
      return true;
    }

    return false;
  }
}
