<?php

$query = require 'core/booting.php';

$router = new Router;

require 'routes.php';

$url = trim($_SERVER['REQUEST_URI'], '/');
require $router->direct('training/pdo');

?>
