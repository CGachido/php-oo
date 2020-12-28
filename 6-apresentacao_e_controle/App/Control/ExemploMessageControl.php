<?php

use Livro\Control\PageControl;
use Livro\Widgets\Dialog\Message;

class ExemploMessageControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();
		new Message('info', 'Mensagem informativa');
		new Message('error', 'Mensagem informativa');
	}
}
