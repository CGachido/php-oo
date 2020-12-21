<?php
// if caso a expressão seja verdadeira else caso a expressão seja falsa
echo "<pre>";
$salario = 1000;
$tempo   = 12;
if ($salario < 1000 && $tempo >= 12) {
  echo "promoção <br>";
} else {
  echo "sem promoção <br>";
}

$salario = 800;
$tempo   = 12;

if ($salario < 1000 && $tempo >= 12) {
  echo "promoção <br>";
} else {
  echo "sem promoção <br>";
}

echo "<hr>";

$valorVenda = 100;

if ($valorVenda > 100) {
  $resultado = "muito caro";
} else {
  $resultado = "pode comprar";
}

var_dump($resultado);

echo "<hr>";

$valorVenda = 102;

if ($valorVenda > 100) {
  $resultado = "muito caro";
} else {
  $resultado = "pode comprar";
}

var_dump($resultado);

echo "<hr>";
$valorVenda = 103;
$resultado = $valorVenda > 100 ? "muito caro" : "pode comprar";
var_dump($resultado);
echo "<hr>";

$valorVenda = 65;
$resultado = $valorVenda > 100 ? "muito caro" : "pode comprar";
var_dump($resultado);
echo "<hr>";

$cont = 1;

while ($cont <= 5) {
  echo $cont . "<br>";
  $cont++;
}
echo "<hr>";

for ($cont = 1; $cont <= 6; $cont++) {
  echo $cont . "<br>";
}
echo "<hr>";

$tipo = "PDF";
switch ($tipo) {
  case 'PDF';
    print 'arquivo PDF';
    break;

  case 'DOC';
    print 'arquivo DOC';
    break;

  default:
    print 'arquivo default';
    break;
}
echo "<hr>";

$tipo = "DOC";
if ($tipo === 'PDF') {
  print 'arquivo PDF';
} else if ($tipo === 'DOC') {
  print 'arquivo DOC';
} else {
  print 'arquivo default';
}

echo "<hr>";

$lista = [
  'maçã', 'laranja', 'pera'
];

foreach ($lista as $fruta) {
  print $fruta . " ";
}

echo "</pre>";
