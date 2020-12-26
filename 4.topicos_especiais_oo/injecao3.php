<?php

require_once 'classes/Record.php';

interface ExporterInterface
{
  public function export($data);
}

class JSONExporter implements ExporterInterface
{
  public function export($data)
  {
    return json_encode($data);
  }
}

class Pessoa extends Record
{
  const TABLENAME = 'pessoas';

  public function export(ExporterInterface $exporter)
  {
    // $exporter injetado
    return $exporter->export($this->data);
  }
}

$pessoa = new Pessoa;
$pessoa->nome = 'João';
$pessoa->endereco = 'Rua das Flores';
$pessoa->numero = '123';

// injetando depedencia
print $pessoa->export(new JSONExporter);
