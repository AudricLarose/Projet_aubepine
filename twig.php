<?php

include_once 'twig/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('view'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
      'cache' => false
    ));
 
 $template = $twig->loadTemplate('index.html');
 echo $template->render(array('moteur_name' => 'Twig'
    )); 