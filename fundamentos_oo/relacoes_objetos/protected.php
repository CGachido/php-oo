<?php

class Pessoa
{
  private $nome;

  public function __construct($nome)
  {
    $this->nome = $nome;
  }
}

class Funcionario extends Pessoa
{
  private $cargo, $salario;

  public function contrata($cargo, $salario)
  {
    if (is_numeric($salario) && $salario > 0) {
      $this->cargo = $cargo;
      $this->salario = $salario;
    }
  }

  public function getInfo()
  {
    return "Nome: {$this->nome}, Salário: {$this->salario}";
  }
}

$funcionario = new Funcionario('Maria da Silva');
$funcionario->contrata('Auxiliar ADM', 1900);

echo "<pre>";
// print_r($funcionario);
print $funcionario->getInfo();
echo "</pre>";
