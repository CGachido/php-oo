<?php

$xml = simplexml_load_file('paises.xml');

echo "<pre>";
var_dump($xml);

echo "<hr>";
print " Nome {$xml->nome} <br>";
print " Idioma {$xml->idioma} <br>";
print " Capital {$xml->capital} <br>";
print " Moeda {$xml->moeda} <br>";
print " Prefixo {$xml->prefixo} <br>";

echo "<hr>";

foreach ($xml->children() as $key => $value) {
  print " {$key} {$value} <br>";
}

echo "<hr>";
echo "</pre>";
