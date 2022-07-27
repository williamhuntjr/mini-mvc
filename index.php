<?php
// Load main controller
require_once('core/mvc.php');

// Load website configuration
require_once('config/config.php');

// Initiate core MVC object
$mvc = new MVC\Core();

/* Example routes
$mvc->router->addRoute("/(catalog)", array("controller"), "GET");
$mvc->router->addRoute("/(catalog)/(view)/([0-9]{1,6})", array("controller", "action", "id"), "GET");
$mvc->router->addRoute("/(categories)/(view)/(all)/([0-9]{1,6})", array("controller", "action", "id", "page"), "GET");
$mvc->router->addRoute("/(categories)/(view)/([0-9]{1,6})/([0-9]{1,6})", array("controller", "action", "id", "page"), "GET");
*/

// Page route
$mvc->router->addRoute("/(.*)", array("page"), "GET");

$route = $mvc->router->parse(($mvc->site_folder !== '' ? substr($_SERVER['REQUEST_URI'],(strlen($mvc->site_folder) + 1)) : $_SERVER['REQUEST_URI']), $_SERVER['REQUEST_METHOD']);

reset($route);
if (key($route) == 'page') { 
  $mvc->header($route);
  $mvc->navigation($route);
  $mvc->page($route); 
  $mvc->footer($route); 
}
elseif (key($route) == 'controller') { 
  $mvc->header($route);
  $mvc->navigation($route);
  $mvc->controller($route);
  $mvc->footer($route); 
}
?>
