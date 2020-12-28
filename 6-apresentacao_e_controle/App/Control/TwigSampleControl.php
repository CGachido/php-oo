<?php

use Livro\Control\PageControl;

class TwigSampleControl extends PageControl
{
	public function __construct()
	{
		$loader = new \Twig\Loader\FilesystemLoader('App/Resources');
		$twig 	= new \Twig\Environment($loader);

		echo $twig->render('form.html', [
			'title' 	=> 'Título do Form',
			'action'	=> 'index.php?class=TwigSampleControl&method=onGravar',
			'nome'		=> 'Maria',
			'endereco'  => 'Maria',
			'telefone'	=> 'Maria',
		]);
	}

	public function onGravar($params)
	{
		echo "<pre>";
		var_dump($params);
		echo "</pre>";
	}
}
