<?php

use Livro\Control\PageControl;
use Livro\Control\Action;
use Livro\Widgets\Dialog\Question;

class ExemploQuestionControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();

		$action1 = new Action([$this, 'onConfirma']);
		$action2 = new Action([$this, 'onNega']);

		new Question('Você deseja confirmar?', $action1, $action2);
	}

	public function onConfirma()
	{
		print "Confirmado";
	}

	public function onNega()
	{
		print "Negado";
	}
}
