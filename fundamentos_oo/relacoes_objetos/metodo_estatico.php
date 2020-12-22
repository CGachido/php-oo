<?php
class Software
{
  private $id;
  private $nome;
  // variável da classe
  private static $contador;

  public function __construct($nome)
  {
    self::$contador++;
    $this->id = self::$contador;
    $this->nome = $nome;
  }

  // Não utiliza o THIS
  public static function getContador()
  {
    return self::$contador;
  }
}
echo "<pre>";
$s1 = new Software('GIMP');
$s2 = new Software('GNumeric');

print_r($s1);
echo "<hr>";
print_r($s2);
var_dump(Software::getContador());
echo "</pre>";
