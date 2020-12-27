<?php

class ProdutoTransactionLog
{
  private $data;

  public function __get($prop)
  {
    return $this->data[$prop];
  }

  public function __set($prop, $value)
  {
    $this->data[$prop] = $value;
  }

  public static function find($id)
  {
    $sql = "
      SELECT * FROM produtos WHERE id = {$id}
    ";

    $conn = Transaction::get();
    $result = $conn->query($sql);
    Transaction::log($sql);
    return $result->fetchObject(__CLASS__);
  }

  public static function all($filter = "")
  {
    $sql = "
      SELECT * FROM produtos
    ";

    if ($filter) {
      $sql .= " WHERE {$filter}";
    }

    $conn = Transaction::get();
    $result = $conn->query($sql);
    Transaction::log($sql);

    return $result->fetchAll(PDO::FETCH_CLASS, __CLASS__);
  }

  public function delete()
  {
    $sql = "
      DELETE FROM produtos WHERE id = {$this->id}
    ";
    $conn = Transaction::get();
    $result = $conn->query($sql);
    Transaction::log($sql);
    return $result;
  }

  public function save()
  {
    if (empty($this->data['id'])) {
      $id = $this->getLastId() + 1;
      $sql = "INSERT INTO produtos (
        id, descricao, estoque, preco_custo, preco_venda, codigo_barras,
        data_cadastro, origem
        ) VALUES (
          '{$id}',
          '{$this->descricao}',
          '{$this->estoque}',
          '{$this->preco_custo}',
          '{$this->preco_venda}',
          '{$this->codigo_barras}',
          '{$this->data_cadastro}',
          '{$this->origem}'
        )";
    } else {
      $sql = "UPDATE produtos SET
            descricao     = '{$this->descricao}',
            estoque       = '{$this->estoque}',
            preco_custo   = '{$this->preco_custo}',
            preco_venda   = '{$this->preco_venda}',
            codigo_barras = '{$this->codigo_barras}',
            data_cadastro = '{$this->data_cadastro}',
            origem        = '{$this->origem}'
          WHERE id  = {$this->data['id']}
        ";
    }
    $conn = Transaction::get();
    $result = $conn->exec($sql);
    Transaction::log($sql);
    return $result;
  }

  public function getLastId()
  {
    $sql = "
      SELECT max(id) as max FROM produtos
    ";
    $conn = Transaction::get();
    $result = $conn->query($sql);
    $data = $result->fetchObject();
    return $data->max;
  }

  public function getMargemLucro()
  {
    return (($this->preco_venda - $this->preco_custo) / $this->preco_custo) * 100;
  }

  public function registraCompra($custo, $quantidade)
  {
    $this->preco_custo = $custo;
    $this->estoque += $quantidade;
  }
}
