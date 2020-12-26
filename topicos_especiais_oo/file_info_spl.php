<?php

$file = new SplFileInfo('file_info_spl.php');

print "Nome: " . $file->getFileName() . "<br>";
print "Extensão: " . $file->getExtension() . "<br>";
print "Tamanho: " . $file->getSize() . "<br>";
print "Tipo: " . $file->getType() . "<br>";

var_dump($file->isWritable());
