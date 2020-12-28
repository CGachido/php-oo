<?php

use Livro\Control\PageControl;
use Livro\Widgets\Form\SimpleForm;

class SimpleFormControl extends PageControl
{
	public function __construct()
	{
		$form = new SimpleForm('my_form');
		$form->setTitle('titulo');

		$form->addField('Nome', 'name', 'text', 'Maria', 'form-control');
		$form->addField('Endereço', 'endereco', 'text', 'Maria', 'form-control');
		$form->addField('Telefone', 'telefone', 'text', 'Maria', 'form-control');
		$form->setAction('index.php?class=SimpleFormControl&method=onGravar');
		$form->show();
	}

	public function onGravar($param)
	{
		echo "<pre>";
		var_dump($param);
		echo "</pre>";
	}
}
