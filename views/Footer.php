<?php
namespace MVC\View\Footer;

class View
{
  private $model;
  private $controller;
  
  public function __construct($controller,$model) {
    $this->controller = $controller;
    $this->model = $model;
  }

  public function render(){
    global $mvc;
    echo $mvc->twig->render($this->model->template, $this->model->data);
  }
}
