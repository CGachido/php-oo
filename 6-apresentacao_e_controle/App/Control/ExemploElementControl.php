<?php

use Livro\Control\PageControl;
use Livro\Widgets\Base\Element;

class ExemploElementControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();

		$div = new Element('div');
		$div->style = 'text-align: center;';
		$div->style .= 'font-weight: bold;';
		$div->style .= 'font-size: 14pt;';

		$p = new Element('p');
		$p->add("Isso é um exemplo de parágrafo");
		$div->add($p);
		parent::add($div);
	}
}
