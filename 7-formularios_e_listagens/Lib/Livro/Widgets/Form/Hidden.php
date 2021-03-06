<?php

namespace Livro\Widgets\Form;

use Livro\Widgets\Base\Element;

class Hidden extends Field implements FormElementInterface
{
	public function show()
	{
		$tag = new Element('input');
		$tag->class = 'field';
		$tag->type 	= 'hidden';
		$tag->name  = $this->name;
		$tag->value = $this->value;
		$tag->style = "width: {$this->size};";

		if ($this->properties) {
			foreach ($this->properties as $property => $value) {
				$tag->$property = $value;
			}
		}

		$tag->show();
	}
}
