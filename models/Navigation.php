<?php
namespace MVC\Model\Navigation;

class Model
{
  public $template;
  public $data = array();

  public function __construct($route){
    global $mvc;

    $current_page = (isset($route['controller']) ? $route['controller'] : ($route['page'] == '' ? 'home' : $route['page']));

    $this->data = array(
      'site_url' => $mvc->site_url,
      'current_page' => $current_page,
    );

    $this->template = 'navigation.html.twig';

  }
}

?>
