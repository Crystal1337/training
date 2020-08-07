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

<!-- FOREACH FUNCTION WITH ARRAYS -->

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

<!-- FOREACH FUNCTION WITH ARRAYS -->


<!-- PRINTING OUT MULTIELEMENT ARRAY AS WELL AS ONE ELEMENT OF THAT ARRAY -->

  <h1>Task for today</h1>
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

<!-- PRINTING OUT MULTIELEMENT ARRAY AS WELL AS ONE ELEMENT OF THAT ARRAY -->


<!-- PRINTING OUT SPECIFIC TASK ELEMENTS-->

  <h1>Task for tomorrow</h1>
  <ul>
    <li>
      <strong> Name: </strong> <?php echo $tasks[2]['title']; ?>
    </li>
    <li>
      <strong> Due Date: </strong> <?php echo $tasks[2]['due']; ?>
    </li>
    <li>
      <strong> Assigned to: </strong> <?php echo $tasks[2]['assigned_to']; ?>
    </li>

<!-- PRINTING OUT SPECIFIC TASK ELEMENTS-->


<!-- 2 VARIATIONS OF IF STATEMENTS FOR TRUE/FALSE AND 2 VARIATIONS OF STANDARD IF STATEMENT -->

    <li>
      <strong> Status: </strong> <?php /*echo $tasks[0]['completed'] ? 'Complete' : 'Incomplete';*/
      if($tasks[2]['completed'])
      {
        echo 'Complete &#9989';
      }
      else
      {
        echo 'Incomplete';
      }
      ?>
      <?php if($tasks[2]['completed']) : ?>
        <div> Good job! You've done it </div>
      <?php else : ?>
        <div>Eventually you'll gotta do it anyways</div>
      <?php endif; ?>
    </li>
  </ul>

<!-- 2 VARIATIONS OF IF STATEMENTS FOR TRUE/FALSE AND 2 VARIATIONS OF STANDARD IF STATEMENT -->

  <?= count($tasks); ?> elements in the tasks array
</body>

</html>
