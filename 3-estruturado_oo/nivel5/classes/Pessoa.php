<?php

class Pessoa
{

  public static function find($id)
  {
    $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query(
      "SELECT * FROM pessoas WHERE id = {$id}"
    );

    return $result->fetch();
  }

  public static function delete($id)
  {
    $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query(
      "DELETE FROM pessoas WHERE id = {$id}"
    );

    return $result;
  }

  public static function all()
  {
    $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query(
      "SELECT * FROM pessoas ORDER BY id"
    );

    return $result->fetchAll();
  }

  public static function save($pessoa)
  {
    $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (empty($pessoa['id'])) {
      $sql = "INSERT INTO pessoas (nome, endereco, bairro, telefone, email, id_cidade) VALUES 
        (
          '{$pessoa['nome']}',
          '{$pessoa['endereco']}',
          '{$pessoa['bairro']}',
          '{$pessoa['telefone']}',
          '{$pessoa['email']}',
          '{$pessoa['id_cidade']}'
        )
      ";
    } else {
      $sql = "UPDATE pessoas SET
          nome      = '{$pessoa['nome']}',
          endereco  = '{$pessoa['endereco']}',
          bairro    = '{$pessoa['bairro']}',
          telefone  = '{$pessoa['telefone']}',
          email     = '{$pessoa['email']}',
          id_cidade = '{$pessoa['id_cidade']}'
          WHERE id  = {$pessoa['id']}
      ";
    }

    $result = $conn->query($sql);

    return $result;
  }
}
