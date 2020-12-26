<?php

$file = new SplFileObject('arquivo.txt');

while (!$file->eof()) {
  print "linhas: " . $file->fgets() . "<br>";
}

foreach ($file as $key => $row) {
  print "{$key} {$row} " . "<br>";
}
