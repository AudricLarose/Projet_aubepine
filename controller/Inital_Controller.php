<?php
namespace controller;

include 'Public/Outils/autoloader_model.php';
class Inital_Controller
{
    public function initial ($twig) 
    {
    echo $twig->render('initial.html.twig');

    }
}
