<?php
require_once './classes/Conta.php';
require_once './classes/ContaCorrente.php';
require_once './classes/ContaPoupanca.php';

// Polimorfismo remete a muitas formas
// É quando as classes filhas tem um metodo de mesmo nome, mas com comportamentos
// diferentes
// A operação retirada nesse caso caracteriza um polimorfismo
// 2 classes filhas da mesma classe Conta, porém comportamentos diferentes no método retirada


$contas   = [];
$contas[] = new ContaCorrente(1234, 'CC.1234', 100, 500);
$contas[] = new ContaPoupanca(1234, 'PP.1234', 100);

echo "<pre>";
foreach ($contas as $conta) {
  if ($conta instanceof Conta) {
    print $conta->getInfo() . "<br>";
    print ". . Saldo atual: {$conta->getSaldo()} <br>";
    $conta->depositar(200);
    print ". . Deposito de: 200 <br>";
    print ". . Saldo atual: {$conta->getSaldo()} <br>";
    if ($conta->retirar(700)) {
      print ". . Retirada de 700 <br>";
    } else {
      print ". . Operação não permitida <br>";
    }
    print ". . Saldo atual: {$conta->getSaldo()} <br>";
    echo "<hr>";
  }
}
echo "</pre>";
