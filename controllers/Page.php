<?php
namespace MVC\Controller\Page;

class Controller
{
  private $model;

  public function __construct($model) {
    $this->model = $model;
  }
}

?>
