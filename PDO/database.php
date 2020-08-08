<?php
  try
  {
    $pdo = new PDO('mysql:host=localhost;dbname=training', 'root', '');
  } catch(PDOException $e){
    die($e->getMessage());
  }

 ?>
