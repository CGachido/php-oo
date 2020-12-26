<?php

$path = 'F:\Sites\php-oo';
$dir = new RecursiveIteratorIterator(
  new RecursiveDirectoryIterator(
    $path,
    RecursiveDirectoryIterator::SKIP_DOTS
  )
);

foreach ($dir as $item) {
  print (string) $item;
  echo "<hr>";
}
