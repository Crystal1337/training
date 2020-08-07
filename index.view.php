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

  <h1>Task for the day</h1>
  <ul>
    <?php
  //  foreach($tasks as $task)
//    {
      foreach($tasks[1] as $key => $info)
      {
        echo '<li><strong>' . ucwords($key) . ' : </strong>' . $info . '</li>';
      }
//    }
    ?>
  </ul>

  <h1>Task for the day</h1>
  <ul>
    <li>
      <strong> Name: </strong> <?php echo $tasks[0]['title']; ?>
    </li>
    <li>
      <strong> Due Date: </strong> <?php echo $tasks[0]['due']; ?>
    </li>
    <li>
      <strong> Assigned to: </strong> <?php echo $tasks[0]['assigned_to']; ?>
    </li>
    <li>
      <strong> Status: </strong> <?php /*echo $tasks[0]['completed'] ? 'Complete' : 'Incomplete';*/
      if($tasks[0]['completed'])
      {
        echo 'Complete';
      }
      else
      {
        echo 'Incomplete';
      }
      ?>
    </li>
  </ul>

</body>

</html>
