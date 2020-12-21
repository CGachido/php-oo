<?php

class Produto
{
  // public, private, protected
  public $descricao;
  public $estoque;
  public $preco;

  // A ideia de métodos é fornecer funcionalidades para a classe
  public function aumentarEstoque($unidades)
  {
    if (is_numeric($unidades) && $unidades >= 0) {
      $this->estoque += $unidades;
    }
  }

  public function diminuirEstoque($unidades)
  {
    if (is_numeric($unidades) && $unidades >= 0) {
      $this->estoque -= $unidades;
    }
  }

  public function reajustarPreco($percentual)
  {
    if (is_numeric($percentual) && $percentual >= 0) {
      $this->preco *= (1 + ($percentual / 100));
    }
  }
}

echo "<pre>";

$produto1 = new Produto();
$produto1->descricao = 'Chocolate';
$produto1->estoque = 10;
$produto1->preco = 5;

print_r($produto1);
$produto1->aumentarEstoque(10);
print_r($produto1);
$produto1->diminuirEstoque(5);
print_r($produto1);
$produto1->reajustarPreco(10);
print_r($produto1);

echo "</pre>";
