<?php
namespace controller;

class Recherche_Plus_Controller
{
    public function recherche_plus($twig)
    {
        try {
            $content_onglet_titre="Classement et recherche";
            if (isset($_GET['id_plante'])) {
                $id_plante=$_GET['id_plante'];
            } else {
              echo $twig->render('erreur_404.html.twig');
                }
            $datas_recherche= new \model\SearchManager_Model;
            $datas_recherche= $datas_recherche->Selected_Data();
            $datas_effet= new \model\EffetManager_Model();
            $datas_effet=$datas_effet->showEffect();
            $datas_prepa= new \model\PrepaManager_Model();
            $datas_prepa=$datas_prepa->showPrepa();
            echo $twig->render('recherche+_view.html.twig',['datas_recherche'=> $datas_recherche, 'datas_effet'=> $datas_effet, 'datas_prepa'=> $datas_prepa]);

        } catch (\Exception $e) {
            $content = $e->getMessage();
            $body= new \tools\Tools();
            $body->body($content, $content_onglet_titre);
        }
    }
}