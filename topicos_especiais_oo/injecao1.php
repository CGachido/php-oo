<?php

require_once 'classes/Record.php';

class JSONExporter
{
  public function export($data)
  {
    return json_encode($data);
  }
}

class Pessoa extends Record
{
  const TABLENAME = 'pessoas';

  public function toJSON()
  {
    // dependencia fixa na classe
    $je = new JSONExporter;
    return $je->export($this->data);
  }
}

$pessoa = new Pessoa;
$pessoa->nome = 'João';
$pessoa->endereco = 'Rua das Flores';
$pessoa->numero = '123';

print $pessoa->toJSON();
