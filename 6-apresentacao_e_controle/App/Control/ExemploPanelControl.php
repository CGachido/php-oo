<?php

use Livro\Control\PageControl;
use Livro\Widgets\Container\Panel;

class ExemploPanelControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();

		$panel = new Panel('Título do Painel');
		$panel->style = 'margin: 20px;';
		$panel->add('Conteúdo Conteúdo Conteúdo Conteúdo');
		$panel->addFooter('Rodapé');
		parent::add($panel);
	}
}
