<?php

// $router->define([
//   '' => 'controllers/index.php',
//   'about' => 'controllers/about.php',
//   'about/culture' => 'controllers/about-culture.php',
//   'contact' => 'controllers/contact.php',
//   'names' => 'controllers/add-name.php'
// ]);

$router->get('', 'PageController@home');
$router->get('about', 'PageController@about.php');
$router->get('contact', 'PageController@contact.php');