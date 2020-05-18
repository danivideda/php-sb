<?php

require 'functions.php';
require 'databases/Connection.php';
require 'databases/QueryBuilder.php';
require 'Task.php';

$pdo = Connection::make();
$query = new QueryBuilder($pdo);

$tasks = $query->selectAll("todos");

require 'index.view.php';