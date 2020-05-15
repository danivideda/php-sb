<?php

function dd($data) {
  echo '<pre>';
  die(var_dump($data));
  echo '</pre>';
}

function ageCheck($age) {
  echo $age >= 21 ? "He's allowed to come in" : "He's not old enough.";
}