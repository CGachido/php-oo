<?php

echo "<pre>";
$nome = "José";
$sobrenome = " Maria";

$nomeCompleto = $nome . $sobrenome;
var_dump($nomeCompleto);
echo "<br>";

$nomeCompleto2 = "$nome $sobrenome";
var_dump($nomeCompleto2);
echo "<br>";

$nomeCompleto3 = "{$nome}-{$sobrenome}x";
var_dump($nomeCompleto3);
echo "<br>";

print "Exemplo de 'aspas'";
echo "<br>";

print "Exemplo de 'aspas' $nome";
echo "<br>";

print 'Exemplo de "aspas dupla"';
echo "<br>";

print 'Exemplo de "aspas dupla" $nome';
echo "<br>";

print 'Exemplo de \'aspas\' com escape backslash';
echo "<br>";

print "Exemplo de \"aspas dupla\" com escape backslash";
echo "<br>";

echo "<hr>";

print strtoupper('converter texto para maiusculo');
echo "<br>";

print strtolower('CONVERTER TEXTO PARA MINUSCULO');
echo "<br>";

print 'comprimento da string ' . strlen('comprimento da string');
echo "<br>";

print "cortar string $nomeCompleto (5, 3) " . substr($nomeCompleto, 5, 3);
echo "<br>";

print "cortar string $nomeCompleto  (0, 3) " . substr($nomeCompleto, 0, 3);
echo "<br>";

print "cortar string $nomeCompleto (-3) " . substr($nomeCompleto, -3);
echo "<br>";

print "substituir a por e string $nomeCompleto " . str_replace('a', 'e', $nomeCompleto);
echo "<br>";

echo "</pre>";
