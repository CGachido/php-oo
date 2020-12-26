<?php
require_once 'veiculo.php';

$rc = new ReflectionClass('Automovel');

echo "<pre>";
print_r($rc->getMethods());
print_r($rc->getProperties());
print_r($rc->getParentClass());
echo "<hr>";

foreach ($rc->getMethods() as $method) {
  echo $method->getName() . "<br>";
  echo print_r($method->getParameters());
  echo "<hr>";
}
echo "</pre>";
