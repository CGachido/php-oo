<?php

use Livro\Database\Transaction;
use Livro\Database\Repository;
use Livro\Database\Criteria;

class PessoaControl
{
	public function listar()
	{
		try {
			Transaction::open('livro');
			$criteria = new Criteria;
			$criteria->setProperty('order', 'id');

			$repositoty = new Repository('Pessoa');
			$pessoas = $repositoty->load($criteria);

			if ($pessoas) {
				foreach ($pessoas as $pessoa) {
					print "{$pessoa->id} - {$pessoa->nome} <br>";
				}
			}
		} catch (Exception $e) {
			print $e->getMessage();
		}
	}

	public function show($param)
	{
		if (isset($param['method']) && $param['method'] == 'listar') {
			$this->listar();
		}
	}
}
