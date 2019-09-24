<?php
namespace controller;

class Quizz_Controller
{
    public function quizz($score,$twig)
	{
		$content_onglet_titre="Quizz";
		if (isset($_SESSION['admin'])) {
			if ($score!= " "){
				$getScore= new \model\Users_Manager();
				$getScore=$getScore->insertScore($score);
}
            $content_invite_admin='Bonjour, Monsieur '.ucfirst($_SESSION['admin']);

			$name=$_SESSION['admin'];
     		$content_nom=$name; //majuscule
		    $action= new \model\Users_Manager();
		    $score=$action->getScore($name);
		    $sessions= new \tools\Tools();
            $session=$sessions->sessionactive();
  		 echo $twig->render('quizz_view.html.twig',['score'=> $score, 'content_invite_admin'=> $content_invite_admin]);
		} else {
			$content='Vous devez vous connectez avant de jouer';
		}

	}
	
}
