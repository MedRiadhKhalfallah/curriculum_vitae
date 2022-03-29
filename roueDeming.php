<?php
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
//    'cache' => __DIR__.'/compilation_cache',
]);
$imgs=[
    ['active'=>'active','path'=>'img/portfolio-img/amy/1.png','alt'=>'1.png','slide'=>'1'],
    ['active'=>'','path'=>'img/portfolio-img/amy/2.png','alt'=>'2.png','slide'=>'2'],
    ['active'=>'','path'=>'img/portfolio-img/amy/3.png','alt'=>'3.png','slide'=>'3'],
    ['active'=>'','path'=>'img/portfolio-img/amy/4.png','alt'=>'4.png','slide'=>'4'],
    ['active'=>'','path'=>'img/portfolio-img/amy/5.png','alt'=>'5.png','slide'=>'5'],
    ['active'=>'','path'=>'img/portfolio-img/amy/6.png','alt'=>'6.png','slide'=>'6'],
    ['active'=>'','path'=>'img/portfolio-img/amy/7.png','alt'=>'7.png','slide'=>'7'],
    ['active'=>'','path'=>'img/portfolio-img/amy/8.png','alt'=>'8.png','slide'=>'8'],
    ['active'=>'','path'=>'img/portfolio-img/amy/9.png','alt'=>'9.png','slide'=>'9'],
];
$logos=[
    'logoSociete'=>'img/logo/sofrecom_logo.png',
    'logoClient'=>'img/logo/orange_logo.png',
];
echo $twig->render('roueDeming.html.twig',['imgs'=>$imgs,'logos'=>$logos]);
