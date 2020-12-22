<?php
class Software
{
  private $id;
  private $nome;
  // variável da classe
  static $contador;

  public function __construct($nome)
  {
    self::$contador++;
    $this->id = self::$contador;
    $this->nome = $nome;
  }
}
echo "<pre>";
$s1 = new Software('GIMP');
$s2 = new Software('GNumeric');

print_r($s1);
echo "<hr>";
print_r($s2);
var_dump(Software::$contador);
echo "</pre>";
