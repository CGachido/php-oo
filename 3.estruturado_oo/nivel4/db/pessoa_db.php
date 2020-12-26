<?php

function getPessoa($id)
{
  $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
  $result = pg_query($conn, "SELECT * FROM pessoas WHERE id = {$id}");
  $pessoa = pg_fetch_assoc($result);
  pg_close($conn);
  return $pessoa;
}

function excluiPessoa($id)
{
  $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
  $result = pg_query($conn, "DELETE FROM pessoas WHERE id = {$id}");
  pg_close($conn);

  return $result;
}

function insertPessoa($pessoa)
{
  $sql = "INSERT INTO pessoas (nome, endereco, bairro, telefone, email, id_cidade) VALUES 
        (
          '{$pessoa['nome']}',
          '{$pessoa['endereco']}',
          '{$pessoa['bairro']}',
          '{$pessoa['telefone']}',
          '{$pessoa['email']}',
          '{$pessoa['id_cidade']}'
        )";
  $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
  $result = pg_query($conn, $sql);
  pg_close($conn);

  return $result;
}

function updatePessoa($pessoa)
{
  $sql = "UPDATE pessoas SET
          nome      = '{$pessoa['nome']}',
          endereco  = '{$pessoa['endereco']}',
          bairro    = '{$pessoa['bairro']}',
          telefone  = '{$pessoa['telefone']}',
          email     = '{$pessoa['email']}',
          id_cidade = '{$pessoa['id_cidade']}'
          WHERE id  = {$pessoa['id']}
        ";
  $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
  $result = pg_query($conn, $sql);
  pg_close($conn);

  return $result;
}

function listaPessoas()
{
  $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
  $result = pg_query($conn, "SELECT * FROM pessoas ORDER BY id");
  $pessoas = pg_fetch_all($result);
  pg_close($conn);
  return $pessoas;
}
