<?php
try {
  $conn = new PDO('pgsql:dbname=curso_oo;user=postgres;password=pg@password;host=localhost');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->exec("INSERT INTO famososxx (codigo, nome) VALUES (6, 'Mário Quintana')");
  $conn = null;
} catch (PDOException $e) {
  print $e->getMessage();
}
