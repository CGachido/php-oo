<?php

use Livro\Database\Transaction;

class PessoaServices
{
	public static function getData($request)
	{
		$id = $request['id'];
		Transaction::open('livro');
		$pessoa = Pessoa::find($id);

		if ($pessoa) {
			$pessoaArray = $pessoa->toArray();
		} else {
			throw new Exception("Pessoa {$id} não encontrada");
		}
		Transaction::close();

		return $pessoaArray;
	}
}
