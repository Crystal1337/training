<!DOCTYPE html>

<html land="pl">

<head>

  <meta charset="utf-8">

  <title>PHP/HTML reminder</title>

  <style>
    header
    {
      background: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
    </style>

</head>

<body>

  <header>

    <h1>
      <?php
        echo $greeting;
      ?>
    </h1>

  </header>

  <ul>
    <?php
    foreach($names as $name)
    {
      echo "<li>$name</li>";
    }
    ?>
  </ul>

  <ul>
    <?php
    foreach($person as $key => $feature)
    {
      echo "<li> <strong>$key = </strong>$feature</li>";
    }
    ?>
  </ul>

  <ul>
    <?php
  //  foreach($tasks as $task)
//    {
      foreach($tasks[1] as $key => $info)
      {
        echo "<li><strong>$key</strong> $info </li>";
      }
//    }
    ?>
  </ul>


</body>

</html>
