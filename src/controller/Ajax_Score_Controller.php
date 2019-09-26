<?php
namespace Coriolis\controller;

class Ajax_Score_Controller
{
    public function ajax_score($score)
	{
		$content_onglet_titre="Quizz";
		if (isset($_SESSION['admin'])) {
			if ($score!= " "){
				$getScore= new \Coriolis\model\Users_Manager();
				$insertScore=$getScore->insertScore($score);
				$getTheScore=$getScore->getScore($_SESSION['admin']);
				echo $getTheScore;
			}
		}
	}

	public function ajax_plante()
	{
		$getScore= new \Coriolis\model\SearchManager_Model();
		$recuperePlante=$getScore->wordCloud_by('nom','plantes');
		foreach ($recuperePlante as $recuperePlantes) {
			echo ucfirst($recuperePlantes['nom']);
			echo "," ;
		} 	
	}
	public function ajax_getId($plante)
	{
		$getId= new \Coriolis\model\SearchManager_Model();
		$recupereId=$getId->GetPlanteId($plante);
		echo $recupereId[0][0];
	}
	
}