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

  $id         = "";
  $nome       = "";
  $endereco   = "";
  $bairro     = "";
  $telefone   = "";
  $email      = "";
  $idCidade   = "";

  if (!empty($_REQUEST['action'])) {
    $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');

    if ($_REQUEST['action'] === 'edit') {
      if (!empty($_GET['id'])) {
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
    } else if ($_REQUEST['action'] === 'save') {
      $nome       = $_POST['nome'];
      $endereco   = $_POST['endereco'];
      $bairro     = $_POST['bairro'];
      $telefone   = $_POST['telefone'];
      $email      = $_POST['email'];
      $idCidade   = $_POST['id_cidade'];

      if (empty($_POST['id'])) {
        $sql = "INSERT INTO pessoas (nome, endereco, bairro, telefone, email, id_cidade) VALUES 
        (
          '{$nome}',
          '{$endereco}',
          '{$bairro}',
          '{$telefone}',
          '{$email}',
          '{$idCidade}'
        )";
      } else {
        $id         = $_POST['id'];
        $sql = "UPDATE pessoas SET
          nome      = '{$nome}',
          endereco  = '{$endereco}',
          bairro    = '{$bairro}',
          telefone  = '{$telefone}',
          email     = '{$email}',
          id_cidade = '{$idCidade}'
          WHERE id  = {$id}
        ";
      }

      $result = pg_query($conn, $sql);

      print $result ? "Registro salvo com sucesso." : pg_last_error($conn);
    }
  }
  ?>

  <form enctype="multipart/form-data" action="pessoa_form.php?action=save" method="post">
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