<?php

class Pessoa
{

  private static $conn;

  public static function getConnection()
  {
    if (empty(self::$conn)) {
      $ini = parse_ini_file('./config/config.ini');
      $host = $ini['host'];
      $name = $ini['name'];
      $user = $ini['user'];
      $pass = $ini['passs'];

      self::$conn = new PDO("pgsql:dbname={$name};user={$user};password={$pass};host={$host}");
      self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return self::$conn;
  }

  public static function find($id)
  {
    $conn = self::getConnection();

    $result = $conn->prepare(
      "SELECT * FROM pessoas WHERE id = :id"
    );

    $result->execute(
      [':id' => $id]
    );

    return $result->fetch();
  }

  public static function delete($id)
  {
    $conn = self::getConnection();

    $result = $conn->prepare(
      "DELETE FROM pessoas WHERE id = :id"
    );

    $result->execute(
      [':id' => $id]
    );

    return $result;
  }

  public static function all()
  {
    $conn = self::getConnection();

    $result = $conn->query(
      "SELECT * FROM pessoas ORDER BY id"
    );

    return $result->fetchAll();
  }

  public static function save($pessoa)
  {
    $conn = self::getConnection();

    $dados = [
      ':nome'     => $pessoa['nome'],
      ':endereco' => $pessoa['endereco'],
      ':bairro'   => $pessoa['bairro'],
      ':telefone' => $pessoa['telefone'],
      ':email'    => $pessoa['email'],
      ':id_cidade' => $pessoa['id_cidade']
    ];

    if (empty($pessoa['id'])) {
      $sql = "INSERT INTO pessoas (nome, endereco, bairro, telefone, email, id_cidade) VALUES 
        (
          :nome,
          :endereco,
          :bairro,
          :telefone,
          :email,
          :id_cidade
        )
      ";
    } else {
      $sql = "UPDATE pessoas SET
          nome      = :nome,
          endereco  = :endereco,
          bairro    = :bairro,
          telefone  = :telefone,
          email     = :email,
          id_cidade = :id_cidade
          WHERE id  = :id
      ";

      $dados[':id'] = $pessoa['id'];
    }

    $result = $conn->prepare($sql);
    $result->execute($dados);

    return $result;
  }
}
