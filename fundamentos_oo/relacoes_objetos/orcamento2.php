<?php

require_once './classes/OrcavelInterface.php';
require_once './classes/Orcamento2.php';
require_once './classes/Produto2.php';
require_once './classes/Servico.php';

// Acoplamento
//   Mede quando um módulo (classe, metodo, componente) conhece e depende de outro;
//   O objetivo é criar modelos com baixo acoplamento;
//   Alto acoplamento diminui reusabilidade, porque os objetos não pode ser utilizados sozinho;
//   Não existe ZERO Acoplamento

// Interfaces
//    É um tipo abstrato de dados

//    Conjunto (lista) de metodos que definem um serviço prestado
//    Representa uma fronteira definida de uma comunicação;
//    É um contrato de prestação de serviço entre 2 classes;
//    Uma classe fornece. Para ela, a interface é realizada;
//    Uma classe consome. Para ela, a interface é utilizada;

//    O uso de interfaces permite uma melhor "substituição" das partes


// Nesse momento o Orcamento não está acoplado em serviços ou produtos

$orcamento = new Orcamento;

$orcamento->adiciona(new Produto('Maquina de Café', 10, 299), 1);
$orcamento->adiciona(new Produto('Grão de Café', 10, 50), 10);
$orcamento->adiciona(new Produto('Chocolate', 10, 5), 16);

$orcamento->adiciona(new Servico('Higienizaçao dos produtos', 150), 1);
$orcamento->adiciona(new Servico('Entrega', 50), 1);

echo $orcamento->calculaTotal();
