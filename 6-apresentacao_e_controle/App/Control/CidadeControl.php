<?php

use Livro\Database\Transaction;
use Livro\Database\Repository;
use Livro\Database\Criteria;

use Livro\Control\PageControl;

class CidadeControl extends PageControl
{
	public function listar()
	{
		try {
			Transaction::open('livro');
			$criteria = new Criteria;
			$criteria->setProperty('order', 'id');

			$repositoty = new Repository('Cidade');
			$cidades = $repositoty->load($criteria);

			if ($cidades) {
				foreach ($cidades as $cidade) {
					print "{$cidade->id} - {$cidade->nome} <br>";
				}
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}
}
