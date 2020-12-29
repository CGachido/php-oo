<?php

use Livro\Control\Action;
use Livro\Control\PageControl;
use Livro\Widgets\Datagrid\Datagrid;
use Livro\Widgets\Datagrid\DatagridColumn;
use Livro\Widgets\Dialog\Message;
use Livro\Widgets\Wrapper\DatagridWrapper;

class ContatoList extends PageControl
{
	private $datagrid;

	public function __construct()
	{
		parent::__construct();

		$this->datagrid = new DatagridWrapper(new Datagrid);
		$codigo  = new DatagridColumn('id', 'Código', 'center', '10%');
		$nome 	 = new DatagridColumn('nome', 'Nome', 'center', '20%');
		$email 	 = new DatagridColumn('email', 'Código', 'center', '30%');
		$assunto = new DatagridColumn('assunto', 'Código', 'center', '30%');

		$this->datagrid->addColumn($codigo);
		$this->datagrid->addColumn($nome);
		$this->datagrid->addColumn($email);
		$this->datagrid->addColumn($assunto);

		$nome->setTransformer(function ($value) {
			return strtoupper($value);
		});

		$this->datagrid->addAction('visualizar', new Action([
			$this, 'onVisualiza'
		]), 'nome');

		parent::add($this->datagrid);
	}

	public function onVisualiza($param)
	{
		new Message('info', "Você clicou {$param['nome']}");
	}

	public function onReload()
	{
		$this->datagrid->clear();

		$m1 = new stdClass;
		$m1->id		= 1;
		$m1->nome	= "Fulano de Tal";
		$m1->email	= "maria@ccc.com";
		$m1->assunto = 'Duvida 1';

		$m2 = new stdClass;
		$m2->id		= 1;
		$m2->nome	=  "Fulano de Tal 2";
		$m2->email	= "maria@ccc.com";
		$m2->assunto = 'Duvida 1';

		$this->datagrid->addItem($m1);
		$this->datagrid->addItem($m2);
	}

	public function show()
	{
		$this->onReload();
		parent::show();
	}
}
