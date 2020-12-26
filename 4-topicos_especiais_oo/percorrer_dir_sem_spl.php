<?php

$dir = opendir('F:\Sites\php-oo');

while ($arquivo = readdir($dir)) {
  print $arquivo . "<br>";
}

closedir($dir);
