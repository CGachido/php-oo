<?php
class Fabricante
{
  // Associação é quando um objeto possui um ponteiro para outro objeto
  // Um objeto possui uma referencia para outro objeto, objeto A conhece objeto B
  // Produto 0..* -> 1 Fabricante
  private $nome;
  private $endereco;
  private $documento;

  public function __construct($nome, $endereco, $documento)
  {
    $this->nome = $nome;
    $this->endereco = $endereco;
    $this->documento = $documento;
  }

  public function getNome()
  {
    return $this->nome;
  }
}
