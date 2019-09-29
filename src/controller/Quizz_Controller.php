<?php
namespace Coriolis\controller;

class Quizz_Controller
{
    public function quizz($score,$twig)
	{
		$content_onglet_titre="Quizz";
		if (isset($_SESSION['admin'])) {
			if ($score!= " "){
				$getScore= new \Coriolis\model\Users_Manager();
				$getScore=$getScore->insertScore($score);
				$getPlayer=$getScore->getPlayer();
			}
            $content_invite_admin='Bonjour, '.ucfirst($_SESSION['admin']);
			$name=$_SESSION['admin'];
     		$content_nom=$name;
		    $action= new \Coriolis\model\Users_Manager();
		    $getPlayer=$action->getPlayer($name);
		    var_dump($getPlayer);
		    $score=$action->getScore($name);
		    $sessions= new \tools\Tools();
            $session=$sessions->sessionactive();
  		 echo $twig->render('quizz_view.html.twig',['score'=> $score,'getPlayer'=> $getPlayer, 'content_invite_admin'=> $content_invite_admin, 'name'=> $name]);
		} else {
			$content='Vous devez vous connectez avant de jouer';
		}

	}
	
}
