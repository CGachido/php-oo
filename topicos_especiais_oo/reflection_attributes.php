<?php
require_once 'veiculo.php';

$rp = new ReflectionProperty('Automovel', 'placa');

print $rp->getName();
echo  "<br>";
print $rp->isPrivate() ? "Privado" : "Público";
echo  "<br>";
print $rp->isStatic() ? "Estático" : "Não Estático";
echo  "<br>";
