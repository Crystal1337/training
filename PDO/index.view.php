<!DOCTYPE html>
<html land="pl">

<head>

  <meta charset="utf-8">

  <title>PHP/HTML reminder</title>
</head>

<body>
  <?php foreach($tasks as $task) : ?>
    <h2><?= $task->Description; ?> <?= $task->completed ? '&#9989' : '&#9998' ?></h2>

  <?php endforeach; ?>
</body>

</html>
