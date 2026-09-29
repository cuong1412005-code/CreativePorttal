<?php

// load libraries
require '../vendor/autoload.php';

// twig stuff
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);


// now we can start

echo $twig->render('base.html.twig', 
                        [
                                'title' => 'Social Media',
                                'content' => 'This is a social media page.'
                        ]
                        );



