<?php

function apresenta($nome)
{
  print "Olá {$nome} <br>";
}
apresenta("Cassius");

$funcao = 'apresenta';
call_user_func($funcao, 'Josué');

class Pessoa
{
  public static function apresenta($nome)
  {
    print "Olá {$nome} <br>";
  }
}

Pessoa::apresenta('Pedro');

$classe = 'Pessoa';
$metodo = 'apresenta';

call_user_func([
  $classe, $metodo
], 'Mario');

$obj = new Pessoa;

call_user_func([
  $obj, $metodo
], 'Paulo');
