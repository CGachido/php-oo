<?php

class Produto
{
  // public, private, protected
  private $descricao;
  private $estoque;
  private $preco;

  public function setDescricao($descricao)
  {
    if (is_string($descricao)) {
      $this->descricao = $descricao;
    }
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function setPreco($preco)
  {
    if (is_numeric($preco) && $preco > 0) {
      $this->preco = $preco;
    }
  }

  public function getPreco()
  {
    return $this->preco;
  }

  public function setEstoque($estoque)
  {
    if (is_numeric($estoque) && $estoque > 0) {
      $this->estoque = $estoque;
    }
  }

  public function getEstoque()
  {
    return $this->estoque;
  }

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
$produto1->setDescricao('Chocolate');
$produto1->setEstoque(10);
$produto1->setPreco(5);

echo "O estoque de {$produto1->getDescricao()} é {$produto1->getEstoque()} <br>";
echo "O preço de {$produto1->getDescricao()} é {$produto1->getPreco()} <br>";

$produto1->aumentarEstoque(10);
$produto1->diminuirEstoque(5);
$produto1->reajustarPreco(10);

echo "O estoque de {$produto1->getDescricao()} é {$produto1->getEstoque()} <br>";
echo "O preço de {$produto1->getDescricao()} é {$produto1->getPreco()} <br>";

echo "</pre>";
