<?php

function lista_combo_cidades()
{
  $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
  $result = pg_query($conn, "SELECT id, nome FROM cidades ORDER BY nome");

  $output = "";
  if ($result) {
    while ($row = pg_fetch_assoc($result)) {
      $id = $row['id'];
      $nome = $row['nome'];
      $output .= "<option value='{$id}'>{$nome}</option>";
    }
  }

  pg_close($conn);
  return $output;
}
