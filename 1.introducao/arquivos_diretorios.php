<?php

$handler = fopen('./tmp/testes/teste.txt', 'r');
// Arquivo muito grande, ler aos poucos com fgets
// linha de até 4k
while (!feof($handler)) {
  echo fgets($handler, 4096);
}
fclose($handler);
echo "<hr>";

$handler2 = fopen('./tmp/testes/teste2.txt', 'w');
fwrite($handler2, 'linha 1' . PHP_EOL);
fwrite($handler2, 'linha 2' . PHP_EOL);
fwrite($handler2, 'linha 3' . PHP_EOL);
fclose($handler2);
echo "<hr>";

// Abre todo o arquivo de uma vez
echo file_get_contents('./tmp/testes/teste2.txt');
echo "<hr>";

file_put_contents('./tmp/testes/teste3.txt', "a\nb\nc");
echo "<hr>";

// Carrega o arquivo na memoria de uma vez só diferente da fgets
$arquivo = file('./tmp/testes/teste.txt');
foreach ($arquivo as $linha) {
  echo $linha . "<br>";
}
echo "<hr>";

copy('./tmp/testes/teste3.txt', './tmp/testes/novoTeste3.txt');
echo "<hr>";

rename('./tmp/testes/novoTeste3.txt', './tmp/testes/novoTeste4.txt');
unlink('./tmp/testes/novoTeste4.txt');
echo "<hr>";

if (file_exists('./tmp/testes/teste3.txt')) {
  echo "arquivo encontrado";
}
echo "<hr>";
if (!file_exists('./tmp/testes/novoTeste4.txt')) {
  echo "arquivo não encontrado";
}
echo "<hr>";
mkdir('./tmp/testes/meuNovoDir', 0777);
rmdir('./tmp/testes/meuNovoDir');
$arquivos = scandir('./tmp/testes');

foreach ($arquivos as $arquivo) {
  echo $arquivo . "<br>";
}
echo "<hr>";
// echo "<hr>";
// echo "<hr>";
// echo "<hr>";
