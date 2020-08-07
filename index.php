<?php

  $greeting = "Hello World";

  /*arrays */
  $names = [
    'Michał',
    'Paweł',
    'Piotr'
  ];

  $person = [
    'age' => 31,
    'name' => 'Michał',
    'surname' => 'Nowak',
    'city' => 'Kalisz'
  ];

  $person['postcode'] = '62-800';
    /*arrays */
  unset($person['age']);

  $tasks = [
    [
      'title' => 'Study php',
      'due' => 'Tomorrow',
      'assigned_to' => 'Mark',
      'completed' => True
    ],
    [
      'title' => 'Shopping',
      'due' => 'Next monday',
      'assigned_to' => 'Karen',
      'completed' => False
    ]
  ];

require 'index.view.php'

 ?>
