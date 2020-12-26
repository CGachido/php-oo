<?php
class Preferencias
{
  // Singleton:
  // É necessário compartilhar informações (pref, configs)
  // dentro de diferentes contextos (classe, metodos)
  // Como compartilhar uma única versão da verdade?
  // Singleon
  // Classe é visivel global;
  // Permite N objetos;
  // Limita a instanciação para instanciar 1 único objeto, não mais que 1.
  // Como limitar em apenas uma instancia?
  // Transformar o método construtor em privado
  // Instanciar a classe dentro da própria classe
  // Criar um método getInstace();
  // Retornar sempre a mesma instância

  private $data;
  private static $instance;

  private function __construct()
  {
    $this->data = parse_ini_file('application.ini');
  }

  public static function getInstance()
  {
    if (empty(self::$instance)) {
      self::$instance = new self;
    }

    return self::$instance;
  }

  public function getData($key)
  {
    return $this->data[$key];
  }

  public function setData($key, $value)
  {
    return $this->data[$key] = $value;
  }

  public function save()
  {
    $string = "";
    if ($this->data) {
      foreach ($this->data as $key => $value) {
        $string .= "{$key} = \"{$value}\" \n";
      }
    }

    file_put_contents("application.ini", $string);
  }
}
