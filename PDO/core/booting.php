<?php
  $config = require 'config.php';
  require 'core/database/connection.php';
  require 'core/database/QueryBuilder.php';
  require 'core/functions.php';
  require 'core/Task.php';
  require 'core/router.php';

  return new QueryBuilder(Connection::make($config['database']));
 ?>
