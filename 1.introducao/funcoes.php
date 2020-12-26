<?php

function calculaIMC(float $peso, float $altura): float
{
  return $peso / ($altura * $altura);
}

$total = 0;
function km2Milhas($km)
{
  // Não recomendado
  global $total;
  $total += $km;

  return $km * 0.6;
}

function percorre($km)
{
  // Variável declarada com static dentro de o contexto de uma função, retém o valor
  static $total;
  $total += $km;
  print "percorreu mais $km de $total \n";
}

function incrementa(&$variavel, $valor)
{
  $variavel += $valor;
}

echo calculaIMC(75, 1.85);
echo "<hr>";
echo km2Milhas(100);
echo "<br>";
echo km2Milhas(100);
echo "<br>";
echo km2Milhas(100);
echo "<br>";
var_dump($total);
echo "<hr>";

echo percorre(100);
echo "<br>";
echo percorre(100);
echo "<br>";
echo percorre(100);
echo "<hr>";

$teste = 100;
incrementa($teste, 30);
var_dump($teste);
echo "<hr>";
$lista = ['a', 'c', 'b'];

//Trabalha por referencia;
sort($lista);
var_dump($lista);
echo "<hr>";

// Função anonima / Lambida, usa ; no final
$removeAcento = function ($str) {
  return str_replace(
    ['á', 'é', 'í', 'ó', 'ú'],
    ['a', 'e', 'i', 'o', 'u'],
    $str
  );
};
var_dump(
  $removeAcento('bábébíbóbu')
);

function teste($palavra, $funcao)
{
  $palavra = $funcao($palavra);

  return strtoupper($palavra);
}
echo "<hr>";

var_dump(
  teste('bábébíbóbu', $removeAcento)
);
echo "<hr>";
