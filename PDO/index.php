<?php

$query = require 'core/booting.php';

$url = trim($_SERVER['REQUEST_URI'], '/');

require Router::load('routes.php')
    ->direct(Request::url());
/*require $router->direct('training/pdo');*/

?>
