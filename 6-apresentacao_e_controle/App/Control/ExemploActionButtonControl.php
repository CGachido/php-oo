<?php

use Livro\Control\Action;
use Livro\Control\PageControl;
use Livro\Widgets\Base\Element;

class ExemploActionButtonControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();
		$button = new Element('a');
		$button->add('Ação');
		$button->class = 'btn btn-success';
		$action = new Action([$this, 'executaAcao']);
		$action->setParameter('codigo', 4);
		$button->href = $action->serialize();
		parent::add($button);
	}

	public function executaAcao($param)
	{
		echo "<pre>";
		var_dump($param);
		echo "</pre>";
	}
}