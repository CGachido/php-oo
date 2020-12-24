<?php

$dados = $_POST;

$conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');

$sql = "INSERT INTO pessoas (nome, endereco, bairro, telefone, email, id_cidade) VALUES 
(
  '{$dados['nome']}',
  '{$dados['endereco']}',
  '{$dados['bairro']}',
  '{$dados['telefone']}',
  '{$dados['email']}',
  '{$dados['id_cidade']}'
)";

$result = pg_query($conn, $sql);

if ($result) {
  print 'Registro inserido com sucesso!';
} else {
  print pg_last_error($conn);
}

pg_close($conn);
