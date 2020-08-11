<?php

class Router
{

  protected $routes = [];
  public function define($routes)
  {
    $this->routes = $routes;
  }

  public function direct($url)
  {
    if(array_key_exists($url, $this->routes))
    {
      return $this->routes['training/pdo'];
    }
    throw new Exception('No routes defined for this url');
  }

}

 ?>
