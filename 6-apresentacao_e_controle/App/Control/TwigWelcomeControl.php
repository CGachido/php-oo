<?php

use Livro\Control\PageControl;

class TwigWelcomeControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();
		$loader = new \Twig\Loader\FilesystemLoader('App/Resources');
		$twig 	= new \Twig\Environment($loader);

		echo $twig->render('welcome.html', [
			'nome' => 'Josué da Silva Sauro',
			'rua' => 'Das Marmotas, 139',
			'cep' => '13.900-000',
			'fone' => '(19) 6663-4444',
		]);
	}

	public function onSaibaMais($params)
	{
		echo "...mais informações <br>";
		echo $params['nome'];
		echo "<br>";
		echo $params['rua'];
		echo "<br>";
	}
}
