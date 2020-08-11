<?php

/*functions*/

function fdump($one, $two, $three)
{
  var_dump($one, $two, $three);
}

function dd($data)
{
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function ageverify($age)
{
  if($age >= 18 && $age < 100)
  {
    echo "<h2>You can come in. $age years old is enough for our club</h2>";
  }
  else if($age < 18)
  {
    $tmp = 18 - $age;
    echo "<h2>You can't come in. Come back in $tmp years </h2>";
  }
  else
  {
    echo "<h2>Come on man, you gotta put a legit age you can't be $age </h2>";
  }
}

/*functions*/

/*classes*/

class Task
{
  public $description;
  public $completed = false;

  public function __construct($description)
  {
    // automatically trigger on instantiation
    $this->description = $description;
  }

  public function isComplete()
  {
    return $this->completed;
  }
  public function complete()
  {
    $this->completed = true;
  }
}

/*classes*/

?>
