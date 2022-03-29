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
    case '/nosper' :
        require __DIR__ . '/nosper.php';
        break;
    case '/epricer' :
        require __DIR__ . '/epricer.php';
        break;
    case '/tripview' :
        require __DIR__ . '/tripview.php';
        break;
    case '/tboutique' :
        require __DIR__ . '/tboutique.php';
        break;
    case '/mtsplus' :
        require __DIR__ . '/mtsplus.php';
        break;
    case '/gestionCaisse' :
        require __DIR__ . '/gestionCaisse.php';
        break;
    case '/gestionProjets' :
        require __DIR__ . '/gestionProjets.php';
        break;
    case '/gynecologue' :
        require __DIR__ . '/gynecologue.php';
        break;
    case '/roueDeming' :
        require __DIR__ . '/roueDeming.php';
        break;
    case '/simulateurCredit' :
        require __DIR__ . '/simulateurCredit.php';
        break;
    default:
        require __DIR__ . '/404.php';
        break;
}
