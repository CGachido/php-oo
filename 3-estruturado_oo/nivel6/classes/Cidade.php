<?php

class Cidade
{
  public static function all()
  {
    $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $conn->query(
      "SELECT * FROM cidades ORDER BY nome"
    );

    return $result->fetchAll();
  }
}
