<?php

$tasks = $app['database']->fetchAll('todos', 'Task');

require 'views/index.view.php';

?>
