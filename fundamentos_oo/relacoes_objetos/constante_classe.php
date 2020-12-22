<?php
class Pessoa
{
  // Membros de classe
  // Valor global de um objeto de classe
  // Constante ou Atributo de classe
  private $nome;
  private $genero;
  private const GENEROS = [
    'M' => 'Masculino',
    'F' => 'Feminino',
  ];

  public function __construct($nome, $genero)
  {
    $this->nome = $nome;
    $this->genero = $genero;
  }

  public function getNome()
  {
    return $this->nome;
  }

  function getNomeGenero()
  {
    return self::GENEROS[$this->genero];
  }
}

// var_dump(Pessoa::GENEROS);
$p1 = new Pessoa('Maria da Silva', 'F');
$p2 = new Pessoa('José da Silva', 'M');

echo "<pre>";
print $p1->getNome();
echo "<br>";
print $p1->getNomeGenero();
echo "<hr>";
print $p2->getNome();
echo "<br>";
print $p2->getNomeGenero();
echo "</pre>";
