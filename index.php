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

$task = [
  'title' => 'Finish homework',
  'due' => 'today',
  'assigned_to' => 'Dani',
  'completed' => false
]; // title, due, assigned_to, completed

require 'index.view.php';