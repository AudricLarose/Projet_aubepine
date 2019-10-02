<?php
namespace Coriolis\controller;

class AjaxScoreController
{
    public function ajaxScore($score)
    {
        $content_onglet_titre="Quizz";
        if (isset($_SESSION['admin'])) {
            if ($score!= " ") {
                $getScore= new \Coriolis\model\UsersManager();
                $insertScore=$getScore->insertScore($score);
                $getTheScore=$getScore->getScore($_SESSION['admin']);
                echo $getTheScore;
            }
        }
    }
    public function ajaxPlante()
    {
        $getScore= new \Coriolis\model\SearchManagerModel();
        $recuperePlante=$getScore->wordCloudBy('nom', 'plantes');
        foreach ($recuperePlante as $recuperePlantes) {
            echo ucfirst($recuperePlantes['nom']);
            echo "," ;
        }   
    }
    public function ajaxGetId($plante)
    {
        $getId= new \Coriolis\model\SearchManagerModel();
        $recupereId=$getId->getPlanteId($plante);
        echo $recupereId[0][0];
    }
    
}