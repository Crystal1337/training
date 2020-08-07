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
    echo "You can come in. $age years old is enough for our club";
  }
  else if($age < 18)
  {
    $tmp = 18 - $age;
    echo "You can't come in. Come back in $tmp years";
  }
  else
  {
    echo "'Come on man, you gotta put a legit age you can't be $age";
  }
}

/*functions*/

?>
