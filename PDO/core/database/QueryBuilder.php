<?php
  class QueryBuilder
  {

    protected $pdo;

    function __construct(PDO $pdo)
    {
      $this->pdo = $pdo;
    }

    function fetchAll($table, $intoClass)
    {
      $statement = $this->pdo->prepare("SELECT * FROM {$table}");
      $statement->execute();
      return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
  }
 ?>
