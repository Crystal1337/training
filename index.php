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

  $tasks[2]['title'] = 'Insert new object into array';
  $tasks[2]['due'] = 'As soon as possible';
  $tasks[2]['assigned_to'] = 'Michał';
  $tasks[2]['completed'] = True;

require 'index.view.php'

 ?>
