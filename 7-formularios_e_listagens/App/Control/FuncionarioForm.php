<?php

use Livro\Database\Transaction;

use Livro\Control\PageControl;
use Livro\Control\Action;
use Livro\Widgets\Dialog\Message;
use Livro\Widgets\Form\Form;
use Livro\Widgets\Form\Entry;
use Livro\Widgets\Form\Combo;
use Livro\Widgets\Form\CheckGroup;
use Livro\Widgets\Form\RadioGroup;
use Livro\Widgets\Wrapper\BootstrapFormWrapper;

class FuncionarioForm extends PageControl
{
	private $form;
	public function __construct()
	{
		parent::__construct();

		$this->form = new BootstrapFormWrapper(new Form('form_funcionario'));

		$this->form->setTitle('Cadastro de funcionários');

		$id 			= new Entry('id');
		$nome 			= new Entry('nome');
		$endereco 		= new Entry('endereco');
		$email 			= new Entry('email');
		$departamento 	= new Combo('departamento');
		$idiomas 		= new CheckGroup('idiomas');
		$contratacao 	= new RadioGroup('contratacao');

		$id->setEditable(false);
		$this->form->addField('Código', $id);
		$this->form->addField('Nome', $nome);
		$this->form->addField('Endereço', $endereco);
		$this->form->addField('Email', $email);
		$this->form->addField('Departamento', $departamento);
		$this->form->addField('Idiomas', $idiomas);
		$this->form->addField('Contratação', $contratacao);

		$departamento->addItems([
			1 => 'RH',
			2 => 'Atendimento',
			3 => 'Engenharia',
			4 => 'Produção',
		]);

		$idiomas->addItems([
			1 => 'Inglês',
			2 => 'Espanhol',
			3 => 'Mandarin',
		]);

		$contratacao->addItems([
			1 => 'Estagiário',
			2 => 'CLT',
			3 => 'PJ',
		]);

		$this->form->addAction('Salvar', new Action([
			$this,
			'onSave'
		]));

		$this->form->addAction('Limpar', new Action([
			$this, 'onClear'
		]));

		parent::add($this->form);
	}

	public function onSave()
	{
		try {
			Transaction::open('livro');

			$data = $this->form->getData();

			if (empty($data->nome)) {
				throw new Exception('Nome vazio');
			}

			$funcionario = new Funcionario;
			$funcionario->fromArray((array) $data);
			$funcionario->idiomas = implode(",", (array) $data->idiomas);
			$funcionario->store();

			$data->id = $funcionario->id;

			$this->form->setData($data);

			new Message('info', 'Dados salvos com sucesso');

			Transaction::close();
		} catch (Exception $e) {
			new Message('error', $e->getMessage());
		}
	}

	public function onEdit($params)
	{
		try {

			Transaction::open('livro');
			$id = isset($params['id']) ? $params['id'] : null;
			$funcionario = Funcionario::find($id);
			if ($funcionario) {
				if (isset($funcionario->idiomas)) {
					$funcionario->idiomas = explode(",", $funcionario->idiomas);
				}

				$this->form->setData($funcionario);
			}

			Transaction::close();
		} catch (Exception $e) {
			new Message('error', $e->getMessage());
		}
	}

	public function onClear()
	{
	}
}
