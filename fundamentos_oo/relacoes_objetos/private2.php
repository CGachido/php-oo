<?php

// Encapsulamento
// Capacidade de uma classe de proteger seus atributos
// Proteger a informação que ela carrega
// Proteger de ser enviado um dado inconsistente
// Seus atributos não devem ser acessados pelo "mundo externo", deve ser feito por meio de métodos
// Private, pode ser modificado somente pela própria classe ou seus métodos

class Pessoa
{
  private $nome;
  private $endereco;
  private $nascimento;

  public function __construct($nome, $endereco)
  {
    $this->nome = $nome;
    $this->endereco = $endereco;
  }

  public function setNascimento($data)
  {
    $partes = explode('-', $data);

    if (
      count($partes) === 3 &&
      checkdate($partes[1], $partes[2], $partes[0])
    ) {
      $this->nascimento = $data;
      return true;
    }

    return false;
  }
}

$pessoa = new Pessoa('Maria Josefa', 'Rua XPTO');
$ok1 = $pessoa->setNascimento('01 de janeiro de 2021');
$ok2 = $pessoa->setNascimento('1989-06-03');

echo "<pre>";
var_dump($ok1);
var_dump($ok2);
print_r($pessoa);
echo "</pre>";
