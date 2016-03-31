<?php
require_once('Twig/Autoloader.php');
require_once('User.php');

/** Twig setup */
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

/** User object setup */
$user = new User();
$user->setUsername("besmera");
$user->setName("Andrew Besmer");
$user->setLanguage("English");

//--------------------------------------------
//You should use twig to render the template index.html
//and then echo it out here. Don't forget to pass
//the user to the template, or edit the template!

$output = $twig->render("index.html", array("user" => array("Name" => $user->getName("Andrew Besmer"), "Username" => $user->getUsername("besmera"), "Language" => $user->getLanguage("English"))));

echo $output;

//--------------------------------------------
