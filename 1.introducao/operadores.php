<?php
$valor = 100;

echo "<pre>";
$valor = $valor + 100;
var_dump($valor);

$valor++;
var_dump($valor);

$valor += 10;
var_dump($valor);

$valor -= 15;
var_dump($valor);

$valor *= 2;
var_dump($valor);

$valor /= 4;
var_dump($valor);

echo "<hr>";

$valor = 100;
$teste = $valor++;
var_dump($valor);
var_dump($teste);

$valor = 100;
$teste = ++$valor;
var_dump($valor);
var_dump($teste);

// + - * / %
echo "<hr>";

$a = 2;
$b = 4;

echo $a + 3 * 4 + 5 * $b;
echo "<br>";
echo ($a + 3) * 4 + (5 * $b);

echo "<hr>";
// > >= < <= != !== === ==

$valor = 100;
if ($valor > 50) {
  print "{$valor} > 50";
  echo "<br>";
}

if ($valor >= 50) {
  print "{$valor} >= 50";
  echo "<br>";
}

if ($valor >= 100) {
  print "{$valor} >= 100";
  echo "<br>";
}

if ($valor > 100) {
  print "{$valor} > 100";
  echo "<br>";
}

echo "<hr>";
$valor2 = '100';
// valores e tipos iguais
if ($valor === $valor2) {
  echo "equals";
}

// apenas valores iguais
if ($valor == $valor2) {
  echo "equals";
}

echo "<hr>";

$salario = 1000;
$cargo = 'gerente';

if ($salario > 800 and $cargo == 'gerente') {
  echo 'ok';
  echo "<br>";
}

$salario = 567;
$cargo = 'gerente';

if ($salario > 800 or $cargo == 'gerente') {
  echo 'ok';
  echo "<br>";
}

if (!($salario > 800 or $cargo == 'gerente')) {
  echo 'ok';
  echo "<br>";
}

echo "</pre>";
