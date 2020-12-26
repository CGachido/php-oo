<?php

require_once 'namespace6.php';
require_once 'namespace7.php';
require_once 'namespace8.php';

use \Library\Widgets\Form;
use \Library\Widgets\Field;
use \Library\Container\Table;

var_dump(new Form);
var_dump(new Field);
var_dump(new Table);


$f = new Form;
$f->show();
$f->fazAlgo(new Field);
