<!DOCTYPE html>
<html land="pl">

<head>

  <meta charset="utf-8">

  <title>PHP/HTML reminder</title>
</head>

<body>

  <nav>
    <ul>
    <li><a href="views/about.view.php">About page</a></li>
    <li><a href="views/contact.view.php">Contact page</a></li>
    </ul>
  </nav>
  <?php foreach($tasks as $task) : ?>
    <h2><?= $task->Description; ?> <?= $task->completed ? '&#9989' : '&#9998' ?></h2>

  <?php endforeach; ?>
  <?php echo '<pre>';
  var_dump($tasks);
  echo '</pre>';?>
</body>

</html>
