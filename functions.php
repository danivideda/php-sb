<?php

function dd($data) 
{
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function connectToDb() 
{
  try {
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

function fetchAllTask($pdo) 
{
  $statement = $pdo->prepare('SELECT * FROM TODOS');
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

function ageCheck($age) 
{
  echo $age >= 21 ? "He's allowed to come in" : "He's not old enough.";
}