<?php

require 'functions.php';
require 'task.php';

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

$task_p = [
  'title' => 'Finish homework',
  'due' => 'today',
  'assigned_to' => 'Dani',
  'completed' => false
]; // title, due, assigned_to, completed

// class Task
// {
//   protected $description;
//   protected $completed = false;

//   public function __construct($description)
//   {
//     $this->description = $description;
//   }

//   public function isComplete()
//   {
//     return $this->completed;
//   }

//   public function complete()
//   {
//     $this->completed = true;
//   }
// }

$pdo = connectToDb();
$tasks = fetchAllTask($pdo);

require 'index.view.php';