<?php

require './vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('./app/views/templates');

$twig = new \Twig\Environment($loader, [
    'cache' => './app/views/templates/cache',
    'cache' => false,
]);

$template = $twig->load('index.html');

$template->display();

