<?php
require_once 'classes/Record.php';

class Produto extends Record
{
  const TABLENAME = 'produtos';

  use ObjectConversionTrait;
}

trait ObjectConversionTrait
{

  // Traits 
  // PHP implementa conceito de herança simples, uma classe pode ser filha
  // apenas de uma classe
  // Trait é um conjunto de metodos que podemos importar para a classe
  // É um pedaço de código que pode ser importado para N classes.

  public function toXML()
  {
    $xml = new SimpleXMLElement(
      "<" . get_class($this) . "/>"
    );

    foreach ($this->data as $key => $value) {
      $xml->addChild($key, $value);
    }

    return $xml->asXML();
  }

  public function toJSON()
  {
    return json_encode($this->data);
  }
}

$x = new Produto;
$x->nome = 'Chocolate';
$x->preco = 10;
$x->estoque = 10;

print $x->save();
echo "<hr>";
print $x->toJson();
echo "<hr>";
