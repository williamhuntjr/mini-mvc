<?php
namespace MVC\Controller\Header;

class Controller
{
  private $model;

  public function __construct($model) {
    $this->model = $model;
  }
}

?>
