<?php


class Person
{
  public function myMethod($name)
  {
    return "hey you!, $name\n";
  }
}

$hello = new Person();
$name = "Dani";
echo $hello->myMethod($name);