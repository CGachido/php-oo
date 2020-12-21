<?php
echo "<pre>";
$cores = array('vermelho', 'verde', 'amarelo');
var_dump($cores);
echo "<hr>";

$cores2 = ['vermelho', 'verde', 'amarelo'];
var_dump($cores2);
$cores2[] = 'azul';
var_dump($cores2);
print $cores2[3];
echo "<hr>";

$cores3 = [];
$cores3[4] = 'branco';
$cores3[5] = 'rosa';
var_dump($cores3);
echo "<hr>";

$pessoa = [];
$pessoa['nome'] = 'Maria';
$pessoa['endereco'] = 'Rua XPTO';
$pessoa['nascsimento'] = '1989-03-01';
var_dump($pessoa);
echo $pessoa['endereco'] . "<br>";

foreach ($pessoa as $informacao) {
  echo $informacao . "<br>";
}

foreach ($pessoa as $chave => $informacao) {
  echo  $chave  . ": " . $informacao . "<br>";
}
echo "<hr>";

$carros = [
  'palio' => [
    'cor' => 'azul',
    'marca' => 'Fiat',
    'ano' => 2002,
  ],
  'corsa' => [
    'cor' => 'prata',
    'marca' => 'GM',
    'ano' => 2004,
  ],
];

print $carros['palio']['cor'] . "<br>";

foreach ($carros as $modelo => $informacoes) {
  print $modelo . "<br>";
  foreach ($informacoes as $chave => $informacao) {
    print $chave . " : " . $informacao . "<br>";
  }
}
echo "<hr>";

$cores = ['vermelho', 'azul', 'cinza'];
$cores[] = 'rosa';
// array_push Adiciona ao final do vetor
array_push($cores, 'preto');
// array_unshift Adiciona no inicio do vetor
array_unshift($cores, 'prata');
var_dump($cores);

// array_shift remove do inicio do vetor
array_shift($cores);
var_dump($cores);

// array_pop remove do final do vetor
array_pop($cores);
var_dump($cores);

$cores = array_reverse($cores);
var_dump($cores);

$resultado = array_merge($cores, ['verde', 'branco']);
var_dump($resultado);
echo "<hr>";

$carros = [];
$carros[10001] = 'Palio 2002';
$carros[34444] = 'Celta 2010';
$carros[9831] = 'Corsa 2009';
$carros[99] = 'Uno 99';
var_dump($carros);
echo "<hr>";

ksort($carros);
var_dump($carros);

asort($carros);
var_dump($carros);

sort($carros);
var_dump($carros);
echo "<hr>";

$carros = [];
$carros[10001] = 'Palio 2002';
$carros[34444] = 'Celta 2010';
$carros[9831] = 'Corsa 2009';
$carros[99] = 'Uno 99';

var_dump(array_keys($carros));
echo "<hr>";

var_dump(array_values($carros));
echo "<hr>";

var_dump(count($carros));
echo "<hr>";

var_dump(in_array('Uno 99', $carros));
echo "<hr>";

$data = '2013-10-20';
$partes = explode('-', $data);
var_dump($partes);
echo "<hr>";

$partes = [2013, 10, 21];
var_dump(implode("-", $partes));
echo "<hr>";

echo "</pre>";
