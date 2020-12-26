<?php
$peixes = [
  'salmão',
  'tilápia',
  'sardinha',
  'badejo',
  'pescada',
  'dourado',
  'corvina',
  'cavala',
  'bagre',
];

$objArray = new ArrayObject($peixes);
$objArray->append("bacalhau");

print $objArray->offsetGet(2) . "<br>";
$objArray->offSetSet(2, 'linguado');
$objArray->offsetUnset(4);
print $objArray->count() . "<br>";

if ($objArray->offsetExists(5)) {
  print "Posição 5 cadastrada {$objArray->offsetGet(5)} <br>";
}

$objArray[] = "Atum";

$objArray->natsort();

foreach ($objArray as $item) {
  print "Item: {$item} <br>";
}
echo "<hr>";

print $objArray->serialize();
