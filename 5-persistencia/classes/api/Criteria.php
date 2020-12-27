<?php

class Criteria
{

  private $filters;
  private $properties;
  public function __construct()
  {
    $this->filters = [];
    $this->properties = [];
  }

  public function add($variable, $compare, $value, $logicOp = 'and')
  {
    if (empty($this->filters)) {
      $logicOp = null;
    }

    $this->filters[] = [
      $variable,
      $compare,
      $this->transform($value),
      $logicOp
    ];
  }

  public function setProperty($property, $value)
  {
    $this->properties[$property] = $value;
  }

  public function getProperty($property)
  {
    if (isset($this->properties[$property])) {
      return $this->properties[$property];
    }
  }


  public function transform($value)
  {
    if (is_array($value)) {
      foreach ($value as $x) {
        if (is_integer($x)) {
          $foo[] = $x;
        } else if (is_string($x)) {
          $foo[] = "'$x'";
        }
      }
      $result = '(' . implode(',', $foo) . ')';
    } else if (is_string($value)) {
      $result = "'$value'";
    } else if (is_null($value)) {
      $result = 'NULL';
    } else if (is_bool($value)) {
      $result = $value ? 'TRUE' : 'FALSE';
    } else {
      $result = $value;
    }

    return $result;
  }

  public function dump()
  {
    if (is_array($this->filters) && count($this->filters)) {
      $result = "";
      foreach ($this->filters as $filter) {
        $result .= $filter[3] .
          " " .  $filter[0]  .
          " " . $filter[1]  .
          " " . $filter[2] .
          " ";
      }

      $result = trim($result);
      return "({$result})";
    }
  }
}
