<?php

namespace Livro\Widgets\Form;

use Livro\Control\ActionInterface;

class Form
{

	protected $title;
	protected $name;
	protected $fields;
	protected $actions;

	public function __construct($name = "form")
	{
		$this->setName($name);
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function addField($label, FormElementInterface $object, $size = "100%")
	{
		$object->setSize($size);
		$object->setLabel($label);

		$name = $object->getName();
		$this->fields[$name] = $object;
	}

	public function addAction($label, ActionInterface $action)
	{
		$this->actions[$label] = $action;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getActions()
	{
		return $this->actions;
	}

	public function setData($object)
	{
		foreach ($this->fields as $name => $field) {
			if ($name && isset($object->$name)) {
				$field->setValue($object->$name);
			}
		}
	}

	public function getData($type = 'stdClass')
	{
		$object = new $type;

		foreach ($this->fields as $name => $field) {
			$value = isset($_POST[$name]) ? $_POST[$name] : '';
			$object->$name = $value;
		}

		return $object;
	}
}
