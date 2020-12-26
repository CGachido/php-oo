<?php

$dados = $_GET;

if ($dados['id']) {
  $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
  $id = (int) $dados['id'];
  $sql = "DELETE FROM pessoas WHERE id = {$id}";

  $result = pg_query($conn, $sql);

  if ($result) {
    print 'Registro removido com sucesso!';
  } else {
    print pg_last_error($conn);
  }

  pg_close($conn);
}
