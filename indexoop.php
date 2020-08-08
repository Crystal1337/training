<?php
require 'functions.php';

$tasks = [
  new Task('Go to school'),
  new Task('Find a job'),
  new Task('Meet Mark')
];

$tasks[0]->complete();
require 'indexoop.view.php';
?>
