<?php

$xml = simplexml_load_file('paises4.xml');

print " Nome {$xml->nome} <br>";
print " Idioma {$xml->idioma} <br>";

foreach ($xml->estados->estado as $estado) {
  print " Estado {$estado['nome']} <br>";
  print " Capital {$estado['capital']} <br>";
  echo "<hr>";
}

echo "<hr>";

foreach ($xml->estados->estado as $estado) {
  foreach ($estado->attributes() as $key => $value) {
    print " {$key} {$value} <br>";
  }
  echo "<hr>";
}
