
<?php
$conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
if (!empty($_GET['action']) && $_GET['action'] === 'delete') {
  $id = (int) $_GET['id'];
  $sql = "DELETE FROM pessoas WHERE id = {$id}";
  $result = pg_query($conn, $sql);
}

$result = pg_query($conn, "SELECT * FROM pessoas ORDER BY id");
$itens = "";
while ($row = pg_fetch_assoc($result)) {
  $item = file_get_contents('html/item.html');
  $item = str_replace('{id}', $row['id'], $item);
  $item = str_replace('{nome}', $row['nome'], $item);
  $item = str_replace('{endereco}', $row['endereco'], $item);
  $item = str_replace('{bairro}', $row['bairro'], $item);
  $item = str_replace('{telefone}', $row['telefone'], $item);
  $item = str_replace('{email}', $row['email'], $item);
  $itens .= $item;
}

$list = file_get_contents('html/list.html');
$list = str_replace('{itens}', $itens, $list);

print $list;
?>
