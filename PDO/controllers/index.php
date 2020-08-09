<?php

$tasks = $query->fetchAll('todos', 'Task');

require 'views/index.view.php';

?>
