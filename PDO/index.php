<?php
$query = require 'booting.php';

$tasks = $query->fetchAll('todos', 'Task');

require 'index.view.php';

?>
