<?php

$xml = simplexml_load_file('paises2.xml');

echo "<pre>";

$xml->moeda = 'Novo real';
$xml->presidente = 'Bobobonauto';
$xml->addChild('primeira-dama', 'Micheque');

echo $xml->asXML();

file_put_contents('paises2.xml', $xml->asXML());
echo "</pre>";
