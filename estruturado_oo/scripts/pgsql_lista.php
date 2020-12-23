<?php
$conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
$query = "SELECT codigo, nome FROM famosos";
$result = pg_query($conn, $query);

if ($result) {
  while ($row = pg_fetch_assoc($result)) {
    print_r($row);
    echo "<br>";
  }
}
pg_close($conn);
