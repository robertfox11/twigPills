<?php
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./template');
//     'index' => 'Hello {{ name }}!',
// ]);r
$twig = new \Twig\Environment($loader);
$who = "hola cambrones";

echo $twig->render('form.html.twig', compact('who'));