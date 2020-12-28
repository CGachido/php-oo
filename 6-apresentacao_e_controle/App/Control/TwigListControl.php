<?php

use Livro\Control\PageControl;

class TwigListControl extends PageControl
{
	public function __construct()
	{
		parent::__construct();
		$loader = new \Twig\Loader\FilesystemLoader('App/Resources');
		$twig 	= new \Twig\Environment($loader);

		echo $twig->render('list.html', [
			'titulo' => 'Lista de Pessoas',
			'pessoas' => [
				[
					'codigo' 	=> 1,
					'nome' 		=> 'Josué da Silva Sauro',
					'endereco' 	=> 'Das Marmotas, 139',
				],

				[
					'codigo' 	=> 2,
					'nome' 		=> 'Maria da Silva Sauro',
					'endereco' 	=> 'Das Ostras, 1439',
				],

				[
					'codigo' 	=> 3,
					'nome' 		=> 'Dino Sauro',
					'endereco' 	=> 'Era da Extinção, 99',
				],
			]
		]);
	}
}
