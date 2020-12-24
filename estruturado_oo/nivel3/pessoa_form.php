
  <?php

  $pessoa = [
    'id'         => "",
    'nome'       => "",
    'endereco'   => "",
    'bairro'     => "",
    'telefone'   => "",
    'email'      => "",
    'id_cidade'  => ""
  ];

  if (!empty($_REQUEST['action'])) {
    $conn = pg_connect('host=localhost port=5432 dbname=curso_oo user=postgres password=pg@password');

    if ($_REQUEST['action'] === 'edit') {
      if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
        $result = pg_query($conn, "SELECT * FROM pessoas WHERE id = {$id}");
        $pessoa = pg_fetch_assoc($result);
      }
    } else if ($_REQUEST['action'] === 'save') {
      $pessoa = $_POST;

      if (empty($_POST['id'])) {
        $sql = "INSERT INTO pessoas (nome, endereco, bairro, telefone, email, id_cidade) VALUES 
        (
          '{$pessoa['nome']}',
          '{$pessoa['endereco']}',
          '{$pessoa['bairro']}',
          '{$pessoa['telefone']}',
          '{$pessoa['email']}',
          '{$pessoa['id_cidade']}'
        )";
      } else {
        $id         = $_POST['id'];
        $sql = "UPDATE pessoas SET
          nome      = '{$pessoa['nome']}',
          endereco  = '{$pessoa['endereco']}',
          bairro    = '{$pessoa['bairro']}',
          telefone  = '{$pessoa['telefone']}',
          email     = '{$pessoa['email']}',
          id_cidade = '{$pessoa['id_cidade']}'
          WHERE id  = {$id}
        ";
      }

      $result = pg_query($conn, $sql);

      print $result ? "Registro salvo com sucesso." : pg_last_error($conn);
    }
  }

  require_once 'lista_combo_cidades.php';
  $cidades = lista_combo_cidades($pessoa['id_cidade']);

  $form = file_get_contents('html/form.html');
  $form = str_replace('{id}', $pessoa['id'], $form);
  $form = str_replace('{nome}', $pessoa['nome'], $form);
  $form = str_replace('{endereco}', $pessoa['endereco'], $form);
  $form = str_replace('{bairro}', $pessoa['bairro'], $form);
  $form = str_replace('{telefone}', $pessoa['telefone'], $form);
  $form = str_replace('{email}', $pessoa['email'], $form);
  $form = str_replace('{cidades}', $cidades, $form);

  print $form;
  ?>

 