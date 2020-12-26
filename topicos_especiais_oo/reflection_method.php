<?php
require_once 'veiculo.php';

$rm = new ReflectionMethod('Automovel', 'setPlaca');

print $rm->getName();
echo "<br>";
print $rm->isPrivate() ? "Privado" : "Público";
echo "<br>";
print $rm->isStatic() ? "Estático" : "Não Estático";
echo "<br>";
print $rm->isFinal() ? "Final" : "Não Final";
echo "<br>";

print_r($rm->getParameters());
