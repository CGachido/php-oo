<?php

// Variável SuperGlobal
// Disponível em qualquer escopo

echo "<pre>";
// Informações do ambiente em que estamos (servidor)
var_dump($_SERVER);

// Array que contém as variáveis passadas na URL
var_dump($_GET);

// Array que contém as variáveis passadas via POST (formulário)
var_dump($_POST);

// Array que contém conteúdo de uploads
var_dump($_FILES);

// Array que contém as variáveis passadas via POST e GET (junta as 2)
var_dump($_REQUEST);

echo "</pre>";
