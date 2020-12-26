<?php
try {
  $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $result = $conn->query("SELECT codigo, nome FROM famosos");
  if ($result) {
    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
      print_r($row);
      print "<br>";
    }
  }
} catch (PDOException $e) {
  print $e->getMessage();
}
