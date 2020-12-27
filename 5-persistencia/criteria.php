<?php
require_once 'classes/api/Criteria.php';

$criteria = new Criteria;
$criteria->add('idade', '<', 16);
$criteria->add('idade', '>', 60, 'or');
print $criteria->dump();

echo "<hr>";

$criteria = new Criteria;
$criteria->add('idade', 'IN', [15, 20, 30]);
$criteria->add('idade', 'NOT IN', [10]);
print $criteria->dump();
