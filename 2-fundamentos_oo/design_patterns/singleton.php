<?php
require_once './classes/Preferencias.php';

$p1 = Preferencias::getInstance();
$p2 = Preferencias::getInstance();

echo "<pre>";
print_r($p1);
$p1->setData('language', 'pt_BR');
echo "<hr>";
print_r($p2);
echo "</pre>";
