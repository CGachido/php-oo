<?php
class Funcionario
{
  public $nome;
  public $salario;
  public $departamento;

  public function setSalario()
  {
  }

  public function getSalario()
  {
  }
}

$jose = new Funcionario;

$metodo = 'Teste';

if (method_exists($jose, $metodo)) {
  $jose->metodo();
  echo "Método $metodo existe <br>";
}

if (method_exists($jose, 'setSalario')) {
  echo "Método setSalario existe <br>";
}
