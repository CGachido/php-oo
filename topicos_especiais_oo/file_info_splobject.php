<?php

$file = new SplFileObject('file_info_spl.php');

print "Nome: " . $file->getFileName() . "<br>";
print "Extensão: " . $file->getExtension() . "<br>";
print "Tamanho: " . $file->getSize() . "<br>";
print "Tipo: " . $file->getType() . "<br>";
echo "<hr>";
$file2 = new SplFileObject('novo txt', 'w');
$bytes = $file2->fwrite('Olá PHP');
print "Bytes: " . $bytes  . "<br>";
