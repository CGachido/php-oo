<?php

$xml = simplexml_load_file('paises2.xml');

echo "<pre>";

print " Nome {$xml->nome} <br>";
print " Idioma {$xml->idioma} <br>";

print " Informações Geograficas <br>";

print " Clima {$xml->geografia->clima} <br>";
print " Costa {$xml->geografia->costa} <br>";
print " Pico {$xml->geografia->pico} <br>";

echo "<hr>";

echo "</pre>";
