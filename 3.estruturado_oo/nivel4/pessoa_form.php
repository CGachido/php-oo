
  <?php
  require_once './db/pessoa_db.php';
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

    if ($_REQUEST['action'] === 'edit') {
      if (!empty($_GET['id'])) {
        $id = (int) $_GET['id'];
        $pessoa = getPessoa(($id));
      }
    } else if ($_REQUEST['action'] === 'save') {
      $pessoa = $_POST;

      if (empty($_POST['id'])) {
        $result = insertPessoa($pessoa);
      } else {
        $result = updatePessoa($pessoa);
      }

      print $result ? "Registro salvo com sucesso" : " Problemas ao salvar o cadastro";
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

 