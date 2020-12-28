<?php

use Livro\Control\PageControl;
use Livro\Widgets\Container\Panel;
use Livro\Widgets\Container\HBox;

class ExemploBoxControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();

		$panel = new Panel('Painel 1');
		$panel->style = 'margin: 10px;';
		$panel->add('painel 1');

		$panel2 = new Panel('Painel 2');
		$panel2->style = 'margin: 10px;';
		$panel2->add('painel 2');

		$box = new HBox;
		$box->add($panel);
		$box->add($panel2);

		parent::add($box);
	}
}
