<?php

namespace Livro\Widgets\Container;

use Livro\Widgets\Base\Element;

class Panel extends Element
{
	private $body;
	private $footer;

	public function __construct($panelTitle = null)
	{
		parent::__construct('div');
		$this->class = 'card';

		if ($panelTitle) {
			$head = new Element('div');
			$head->class = 'card-header';
			$head->add($panelTitle);

			parent::add($head);
		}

		$this->body = new Element('div');
		$this->body->class = 'card-body';
		parent::add($this->body);

		$this->footer = new Element('div');
		$this->footer->class = 'card-footer';
	}

	public function add($content)
	{
		$this->body->add($content);
	}

	public function addFooter($footer)
	{
		$this->footer->add($footer);
		parent::add($this->footer);
	}
}
