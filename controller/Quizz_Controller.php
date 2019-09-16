<?php
namespace controller;

class Quizz_Controller
{
    public function quizz($score)
	{
		$content_onglet_titre="Quizz";
		if (isset($_SESSION['admin'])) {
			if ($score!= " "){
				$getScore= new \model\Users_Manager();
				var_dump($score);
				$getScore=$getScore->insertScore($score);
			}
			$loader = new Twig_Loader_Filesystem('coriolis'); // Dossier contenant les templates
			$twig = new Twig_Environment($loader, array('cache' => false));
 			$template = $twig->loadTemplate('quizz_view.html');
 			echo $template->render(array('moteur_name' => 'Twig', 'score' => 'meeerde')); 
			$name=$_SESSION['admin'];
     		$content_nom=$name; //majuscule
		    $action= new \model\Users_Manager();
		    $score=$action->getScore($name);
		    $sessions= new \tools\Tools();
            $session=$sessions->sessionactive();		
    		require 'view/quizz_view.html';
		} else {
			$content='Vous devez vous connectez avant de jouer';
		}
		$action= new \tools\Tools();
    	$action->body($content,$content_onglet_titre);
	}
	
}
