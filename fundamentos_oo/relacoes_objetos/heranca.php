<?php
require_once './classes/Conta.php';
require_once './classes/ContaCorrente.php';
require_once './classes/ContaPoupanca.php';

// Herança é um recurso que permite criarmos uma estrutura nova
// utilizando o que já existe. Criamos uma classe filha que herda
// comportamentos de uma classe pai, podendo redefinir alguns comportamentos/caracteristicas
// na classe filha.
// A classe filha não herda metodos e atributos privados.
// Especialização, criar uma classe basica, essencial, a partir dela criar 
// classes com comportamentos específicos, top - down.
// Generalização, quando você já tem o comportamento espalhado no sistema e localiza
// coisas em comum, então você reune essas coisas em uma classe pai e uso o mecanimos de Herança
// para compartilhar esses recursos, bottom - up.

echo "<pre>";
$poupanca = new ContaPoupanca('100', '123123', 500);
print_r($poupanca);
echo "<hr>";
$poupanca->depositar(200);
print_r($poupanca);
$poupanca->retirar(100);
print_r($poupanca);
echo "</pre>";
