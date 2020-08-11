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
        $name = htmlspecialchars($_GET['name']);

        $greetings = "Hello World i ";

        echo $greetings;

        echo "Hello $name <br>";

        echo "Hello " . htmlspecialchars($_GET['name']);

      ?>
    </h1>

  </header>

</body>

</html>
