<?php
// dinamicamente tipado

/*
  * declare(strict_types=1);
  * Habilita no PHP a tipagem estrita
  * Os tipos das variáveis devem ser exatamente do tipo solicitado
  * Exceto float e int
*/

// declare(strict_types=1);

echo "<pre>";
$codigo = 5;
var_dump($codigo);

$codigo = 5.5;
$nome = "teste";

var_dump($codigo);
var_dump($nome);
var_dump('nome ' . ' sobrenome ' . 5);
var_dump(4 . 5);
var_dump(4.5);
var_dump(4 + 5);
var_dump(4 + '5');
var_dump('4' + '5');

####

function calculaIMC($peso, $altura)
{
  var_dump($peso, $altura);
  return $peso / ($altura * $altura);
}

// converter o tipo de dado na entrada
function calculaIMC2(float $peso, float $altura)
{
  return $peso / ($altura * $altura);
}

// forçar o tipo a converão na saída (retorno)
function calculaIMC3(float $peso, float $altura): int
{
  return $peso / ($altura * $altura);
}

echo "<hr>";

var_dump(calculaIMC(85, 1.89));
var_dump(calculaIMC('75', 1.89));

echo "<hr>";

var_dump(calculaIMC2(85, 1.89));
var_dump(calculaIMC2('75', 1.89));

var_dump(calculaIMC3(65, 1.89));
var_dump(calculaIMC3('65', 1.89));

echo "</pre>";
