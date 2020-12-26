<?php
require_once 'namespace2.php';
require_once 'namespace3.php';

use Application\Form as ApplicationForm;
use Components\Form as ComponentsForm;
// use Application\Field;
// var_dump(new \Application\Form);
echo "<pre>";
var_dump(new \Application\Field);
var_dump(new \Components\Field);
var_dump(new ApplicationForm);
var_dump(new ComponentsForm);
echo "</pre>";
