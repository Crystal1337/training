<?php
  $app = [];
  $app['config'] = require 'config.php';
  require 'core/database/connection.php';
  require 'core/database/QueryBuilder.php';
  require 'core/functions.php';
  require 'core/Request.php';
  require 'core/Task.php';
  require 'core/router.php';

  $app['database'] = new QueryBuilder(

    Connection::make($app['config']['database'])

  );
 ?>
