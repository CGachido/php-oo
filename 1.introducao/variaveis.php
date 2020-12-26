<?php

$nome = "Cassius";
$sobrenome = "Souza";

print $nome . ' ' . $sobrenome;
echo "<br />";

$nomeCompleto = $nome . ' ' . $sobrenome;
print $nomeCompleto;
echo "<br>";

$nomeCompleto2 = "$nome $sobrenome";
print $nomeCompleto2;
echo "<br>";

$nomeCompleto3 = "{$nome}  {$sobrenome}";
print $nomeCompleto3;
echo "<br>";

print "Teste'Teste";
echo "<br>";

print 'Teste"Teste';
echo "<br>";

$nomeCompleto4 = "{$nome} \" {$sobrenome}";
print $nomeCompleto4;
echo "<br>";

$a = 5;
$b = 5;
var_dump($a * $b);
echo "<br>";

$a = 5;
$b = 4.5;
var_dump($a * $b);
echo "<br>";

$a = 5;
$b = '5';
var_dump($a * $b);
echo "<br>";

$a = 5;
$b = '6xxx';
var_dump($a * $b);
echo "<br>";

$a = 5;
$b = 'xxx7';
var_dump($a * $b);
echo "<br>";

$a = 5;
$b = $a;
var_dump($a);
var_dump($b);
echo "<br>";

// PASSAGEM DE DADOS POR VALOR
$a = 5;
$b = $a;

$a = 10;
var_dump($a);
var_dump($b);
echo "<br>";

// PASSAGEM DE DADOS POR REFENCIA
$a = 5;
$b = &$a;

$a = 10;
var_dump($a);
var_dump($b);
echo "<br>";

$peso = 30;
$multa = ($peso > 25);
var_dump($multa);
echo "<br>";
if ($peso > 25) {
  print "multa";
}
echo "<br>";

// 0 | 0.0 | '' | "" | "0"
$nome = "";
if ($nome) {
  print 'nome tem conteúdo';
}
echo "<br>";

$nome = "conteudo";
if ($nome) {
  print 'nome tem conteúdo';
}
echo "<br>";

// Considerados vazio
// "" (uma string vazia)
// 0 (0 como um inteiro)
// 0.0 (0 como um ponto flutuante)
// "0" (0 como uma string)
// null
// false
// array() (um array vazio)
// $var; (uma variável declarada, mas sem valor)
$check = 0;
if (!empty($check)) {
  print 'checou tem conteúdo';
}
echo "<br>";

$lista = [
  'vermelho',
  'verde',
  'amarelo',
];
var_dump($lista);
echo "<br>";

$lista = [
  'cor' => [
    'vermelho',
    'verde',
    'amarelo',
  ]
];
var_dump($lista);
echo "<br>";

// Objeto é sempre passagem por referencia.
$pessoa = new stdClass;
$pessoa->nome = "Cassius Souza";
$pessoa->altura = 1.89;
$pessoa2 = $pessoa;
var_dump($pessoa);
$pessoa2->nome = 'José Maria';
echo "<br>";
var_dump($pessoa);
echo "<br>";
var_dump($pessoa2);
echo "<br>";
