<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Pessoa</title>
  <link rel="stylesheet" href="css/form.css">
</head>

<body>

  <?php
  if (!empty($_GET['id'])) {
    $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');
    $id = (int) $_GET['id'];

    $result = pg_query($conn, "SELECT * FROM pessoas WHERE id = {$id}");
    $row = pg_fetch_assoc($result);

    $id         = $row['id'];
    $nome       = $row['nome'];
    $endereco   = $row['endereco'];
    $bairro     = $row['bairro'];
    $telefone   = $row['telefone'];
    $email      = $row['email'];
    $idCidade   = $row['id_cidade'];
  }
  ?>
  <form enctype="multipart/form-data" action="pessoa_save_update.php" method="post">
    <label for="">Código</label>
    <input value="<?= $id ?>" readonly="1" type="text" name="id" style="width: 30%;">
    <label for="">Nome</label>
    <input value="<?= $nome ?>" type="text" name="nome" style="width: 50%;">
    <label for="">Endereço</label>
    <input value="<?= $endereco ?>" type="text" name="endereco" style="width: 50%;">
    <label for="">Bairro</label>
    <input value="<?= $bairro ?>" type="text" name="bairro" style="width: 25%;">
    <label for="">Telefone</label>
    <input value="<?= $telefone ?>" type="text" name="telefone" style="width: 50%;">
    <label for="">Email</label>
    <input value="<?= $email ?>" type="text" name="email" style="width: 25%;">
    <label for="">Cidade</label>

    <select type="text" name="id_cidade" style="width: 25%;">
      <?php
      require_once 'lista_combo_cidades.php';
      print lista_combo_cidades($idCidade);
      ?>
    </select>
    <input type="submit" value="ENVIAR">
  </form>

</body>

</html>