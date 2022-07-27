<?php
namespace MVC\Model\Footer;

class Model
{
  public $template;
  public $data = array();

  public function __construct(){
    global $mvc;
    $this->template = 'footer.html.twig';

  }
}

?>
