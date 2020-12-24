<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem de Pessoas</title>
  <link rel="stylesheet" href="css/list.css">
</head>

<body>

  <table border="1">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th>Código</th>
        <th>Nome</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>Telefone</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
      if (!empty($_GET['action']) && $_GET['action'] === 'delete') {
        $id = (int) $_GET['id'];
        $sql = "DELETE FROM pessoas WHERE id = {$id}";
        $result = pg_query($conn, $sql);
      }

      $result = pg_query($conn, "SELECT * FROM pessoas ORDER BY id");

      while ($row = pg_fetch_assoc($result)) {
        $id       = $row['id'];
        $nome     = $row['nome'];
        $endereco = $row['endereco'];
        $bairro   = $row['bairro'];
        $telefone = $row['telefone'];
        $email    = $row['email'];
        $idCidade = $row['id_cidade'];

        print '<tr>';
        print "<td>
                <a href='pessoa_form.php?action=edit&id={$id}'>
                  <img src='img/edit.svg' style='width: 17px;'>
                </a>
              </td>";
        print "<td>
              <a href='pessoa_list.php?action=delete&id={$id}'>
                <img src='img/remove.svg' style='width: 17px;'>
              </a>
            </td>";
        print "<td>{$id}</td>";
        print "<td>{$nome}</td>";
        print "<td>{$endereco}</td>";
        print "<td>{$bairro}</td>";
        print "<td>{$telefone}</td>";
        print "<td>{$email}</td>";
        print '</tr>';
      }
      ?>
    </tbody>
  </table>

  <button onclick="window.location='pessoa_form.php'">
    <img src="img/insert.svg" style="width: 17px;">
  </button>

</body>

</html>