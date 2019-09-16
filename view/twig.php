<?php

include_once 'twig/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('coriolis'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
      'cache' => false
    ));
 
 $template = $twig->loadTemplate('quizz_view.html');
 echo $template->render(array('moteur_name' => 'Twig', 'score' => 'meeerde')); 