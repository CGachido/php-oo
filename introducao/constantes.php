<?php

// Constante é uma chave que contém um valor e é visível no escopo global
// Não é possível alterar o valor dentro da mesma requisição
define('LANGUAGE', 'PT_BR');

var_dump(LANGUAGE);

var_dump(__FILE__);
var_dump(__LINE__);
var_dump(__DIR__);

define('LANGUAGE', 'en-us');

var_dump(LANGUAGE);
