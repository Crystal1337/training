<?php

require 'database.php';
require 'Task.php';

$statement = $pdo->prepare('SELECT * FROM todos');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, "Task");

echo '<pre>';
var_dump($tasks);
echo '</pre>';

require 'index.view.php';

?>
