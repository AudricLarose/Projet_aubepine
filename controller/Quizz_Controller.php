<?php
namespace controller;

class Quizz_Controller
{
    public function quizz()
	{
		$content_onglet_titre="Quizz";
		$sessions= new \tools\Tools();
        $session=$sessions->sessionactive();
		if ($session=='ok') {
			var_dump($_SESSION['admin']);
    		require 'view/quizz_view.php';

		} else {
			$content='Vous devez vous connectez avant de jouer';
		}
		$action= new \tools\Tools();
    	$action->body($content,$content_onglet_titre);
	}
}
