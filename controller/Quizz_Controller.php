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
			$name=$_SESSION['admin'];
     		$content_nom=$name; //majuscule
		    $action= new \model\Users_Manager();
		    $score=$action->getScore($name);
		    $sessions= new \tools\Tools();
            $session=$sessions->sessionactive();		
    		require 'view/quizz_view.php';
		} else {
			$content='Vous devez vous connectez avant de jouer';
		}
		$action= new \tools\Tools();
    	$action->body($content,$content_onglet_titre);
	}
	public function quizz_score($score)
	{
	
		$action= new \model\Users_Manager();
		$score=$action->getScore($name);

	}
}
