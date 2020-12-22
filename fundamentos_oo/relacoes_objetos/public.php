<?php

// Encapsulamento
// Capacidade de uma classe de proteger seus atributos
// Proteger a informação que ela carrega
// Proteger de ser enviado um dado inconsistente
// Seus atributos não devem ser acessados pelo "mundo externo", deve ser feito por meio de métodos
// Public, qualquer um pode mexer, desprotegido
class Pessoa
{
  public $nome;
  public $endereco;
  public $nascimento;
}

$pessoa = new Pessoa;
$pessoa->nome = 'Maria Josefa';
$pessoa->endereco = 'Rua XPTO';
$pessoa->nascimento = '01 de janeiro de 2021';

echo "<pre>";
print_r($pessoa);
echo "</pre>";
