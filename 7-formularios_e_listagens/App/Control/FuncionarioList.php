<?php

use Livro\Control\Action;
use Livro\Control\PageControl;
use Livro\Widgets\Datagrid\Datagrid;
use Livro\Widgets\Datagrid\DatagridColumn;
use Livro\Widgets\Dialog\Message;
use Livro\Widgets\Dialog\Question;
use Livro\Widgets\Wrapper\DatagridWrapper;
use Livro\Database\Transaction;
use Livro\Database\Repository;
use Livro\Database\Criteria;

class FuncionarioList extends PageControl
{
	private $datagrid;

	public function __construct()
	{
		parent::__construct();

		$this->datagrid = new DatagridWrapper(new Datagrid);

		$codigo 	= new DatagridColumn('id', 'Código', 'right', '10%');
		$nome 		= new DatagridColumn('nome', 'Nome', 'left', '30%');
		$endereco 	= new DatagridColumn('endereco', 'Endereço', 'left', '30%');
		$email 		= new DatagridColumn('email', 'Email', 'left', '30%');

		$this->datagrid->addColumn($codigo);
		$this->datagrid->addColumn($nome);
		$this->datagrid->addColumn($endereco);
		$this->datagrid->addColumn($email);

		$this->datagrid->addAction('Editar', new Action([
			new FuncionarioForm, 'onEdit'
		]), 'id');

		$this->datagrid->addAction('Deletar', new Action([
			$this, 'onDelete'
		]), 'id');


		parent::add($this->datagrid);
	}

	public function onReload()
	{
		try {
			Transaction::open('livro');
			$repository = new Repository('Funcionario');
			$criteria = new Criteria;
			$criteria->setProperty('order', 'id');
			$funcionarios = $repository->load($criteria);
			$this->datagrid->clear();

			if ($funcionarios) {
				foreach ($funcionarios as $funcionario) {
					$this->datagrid->addItem($funcionario);
				}
			}

			Transaction::close();
		} catch (Exception $e) {
			new Message('error', $e->getMessage());
		}
	}

	public function onDelete($params)
	{
		$action = new Action([$this, 'delete']);
		$action->setParameter('id', $params['id']);
		new Question('Deseja realmente excluir o registro?', $action);
	}


	public function delete($params)
	{
		try {
			Transaction::open('livro');
			$funcionario = Funcionario::find($params['id']);

			if ($funcionario) {
				$funcionario->delete();
			}

			Transaction::close();

			$this->onReload();

			new Message('info', 'Funcionário excluído com sucesso');
		} catch (Exception $e) {
			new Message('error', $e->getMessage());
		}
	}

	public function show()
	{
		$this->onReload();
		parent::show();
	}
}
