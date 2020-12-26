
  <?php
  require_once './classes/Pessoa.php';
  require_once './classes/Cidade.php';
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
    try {
      if ($_REQUEST['action'] === 'edit') {
        if (!empty($_GET['id'])) {
          $id = (int) $_GET['id'];
          $pessoa = Pessoa::find($id);
        }
      } else if ($_REQUEST['action'] === 'save') {
        $pessoa = $_POST;
        $result = Pessoa::save($pessoa);
        print "Registro salvo com sucesso";
      }
    } catch (Exception $e) {
      print $e->getMessage();
    }
  }

  $cidades = "";

  foreach (Cidade::all() as $cidade) {
    $id   = $cidade['id'];
    $nome = $cidade['nome'];
    $check = ($id == $pessoa['id_cidade']) ? 'selected' : '';
    $cidades .= "<option {$check} value='{$id}'>{$nome}</option>";
  }

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

 