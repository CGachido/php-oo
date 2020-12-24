<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Pesso</title>
  <link rel="stylesheet" href="css/form.css">
</head>

<body>
  <form enctype="multipart/form-data" action="pessoa_save_insert.php" method="post">
    <label for="">Código</label>
    <input readonly="1" type="text" name="id" style="width: 30%;">
    <label for="">Nome</label>
    <input type="text" name="nome" style="width: 50%;">
    <label for="">Endereço</label>
    <input type="text" name="endereco" style="width: 50%;">
    <label for="">Bairro</label>
    <input type="text" name="bairro" style="width: 25%;">
    <label for="">Telefone</label>
    <input type="text" name="telefone" style="width: 50%;">
    <label for="">Email</label>
    <input type="text" name="email" style="width: 25%;">
    <label for="">Cidade</label>

    <select type="text" name="id_cidade" style="width: 25%;">
      <?php
      require_once 'lista_combo_cidades.php';
      print lista_combo_cidades();
      ?>
    </select>
    <input type="submit" value="ENVIAR">
  </form>

</body>

</html>