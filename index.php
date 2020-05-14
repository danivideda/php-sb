<?php

$hobbies = [
  'Play Soccer',
  'Reading books',
  'Travel'
];

$person = [
  'age' => 20,
  'hair' => 'brown',
  'career' => 'web developer'
];

echo '<pre>';
(var_dump($person));
echo '</pre>';

require 'index.view.php';