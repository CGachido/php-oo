<?php

class Funcionario
{
  public $nome;
  public $salario;
  public $departamento;
}

class Estagiario extends Funcionario
{
  public $bolsa;
}

$jose = new Funcionario;
$joao = new Estagiario;

echo "<pre>";
print_r(get_class($jose));
echo "<br>";
print_r(get_class($joao));
echo "<br>";
print_r(get_parent_class($joao));
echo "<br>";
print_r(get_parent_class('Estagiario'));
echo "<br>";
var_dump(is_subclass_of($joao, 'Funcionario'));
echo "<br>";
var_dump(is_subclass_of('Estagiario', 'Funcionario'));
echo "<br>";
echo "</pre>";
