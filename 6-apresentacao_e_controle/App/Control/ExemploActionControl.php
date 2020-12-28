<?php

use Livro\Control\Action;
use Livro\Control\PageControl;

class ExemploActionControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();

		$action = new Action([$this, 'executaAcao']);

		$action->setParameter('codigo', 4);
		$action->setParameter('nome', 'teste');

		print $action->serialize();
	}

	public function executaAcao()
	{
	}
}
