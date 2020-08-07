<?php
require 'functions.php';

  $greeting = "Hello World";

/*arrays */

  $names = [
    'Michał',
    'Paweł',
    'Piotr'
  ];

  $animals = [
    'cat',
    'dog',
    'whale',
    'monkey'
  ];

  $person = [
    [
      'age' => 31,
      'name' => 'Andrzej',
      'surname' => 'Markowski',
      'city' => 'Poznań'
    ],
    [
      'age' => 6,
      'name' => 'Michał',
      'surname' => 'Nowak',
      'city' => 'Kalisz'
    ],
    [
      'age' => 104,
      'name' => 'Paweł',
      'surname' => 'Kowalski',
      'city' => 'Warszawa'
    ]
];

/*  $person['postcode'] = '62-800'; */
/*  unset($person['age']); */

    /*arrays */


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

/*arrays */

require 'index.view.php'

 ?>
