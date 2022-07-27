<?php
namespace MVC\Model\Header;

class Model
{
  public $template;
  public $data = array();

  public function __construct(){
    global $mvc;
    $this->data = array(
      'site_url' => $mvc->site_url
    );
    $this->template = 'header.html.twig';

  }
}

?>
