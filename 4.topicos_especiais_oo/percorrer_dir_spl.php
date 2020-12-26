<?php

foreach (new DirectoryIterator('F:\Sites\php-oo') as $file) {
  print "Nome: {$file->getFileName()} <br>";
  print "Extensão: {$file->getExtension()} <br>";
  print "Tamanho: {$file->getSize()} <br>";
  echo "<hr>";
}
