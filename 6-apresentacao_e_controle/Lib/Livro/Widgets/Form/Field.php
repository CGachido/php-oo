<?php

namespace Livro\Widgets\Form;

abstract class Field implements FormElementInterface
{
	protected $name;
	protected $size;
	protected $value;
	protected $editable;
	protected $formLabel;
	protected $properties;

	public function __construct($name)
	{
		self::setEditable(true);
		self::setName($name);
		$this->properties = [];
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setLabel($label)
	{
		$this->label = $label;
	}

	public function getLabel()
	{
		return $this->label;
	}

	public function setValue($value)
	{
		$this->value = $value;
	}

	public function getValue()
	{
		return $this->value;
	}

	public function setEditable($editable)
	{
		$this->editable = $editable;
	}

	public function getEditable()
	{
		return $this->editable;
	}

	public function setProperty($name, $value)
	{
		$this->properties[$name] = $value;
	}

	public function getProperty()
	{
		return $this->properties;
	}

	public function setSize($size)
	{
		$this->size = $size;
	}

	public function getSize($width, $height = null)
	{
		return $this->size = $width;
	}

	public function __set($name, $value)
	{
		if (is_scalar($value)) {
			$this->setProperty($name, $value);
		}
	}

	public function __get($name)
	{
		return $this->getProperty($name);
	}
}
