<?php

$location = "http://phpoo.example/6-apresentacao_e_controle/rest.php";
$parameters = [
	'class' 	=> "PessoaServices",
	'method' 	=> "getData",
	'id' 		=> "1",
];

$url = $location . "?" . http_build_query($parameters);

var_dump(json_decode(file_get_contents($url)));
