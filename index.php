<?php
require 'vendor/autoload.php';


$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
    case '' :
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
        $twig = new \Twig\Environment($loader, [
//    'cache' => __DIR__.'/compilation_cache',
        ]);

        echo $twig->render('index.html.twig', ['name' => 'Fabien']);
        break;
    case '/refclics' :
        require __DIR__ . '/refclics.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
