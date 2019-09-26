<?php
namespace Coriolis\controller;

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
            $datas_recherche= new \Coriolis\model\SearchManager_Model;
            $datas_recherche= $datas_recherche->Selected_Data();
            $datas_effet= new \Coriolis\model\EffetManager_Model();
            $datas_effet=$datas_effet->showEffect();
            $datas_prepa= new \Coriolis\model\PrepaManager_Model();
            $datas_prepa=$datas_prepa->showPrepa();
            if (!isset($datas_effet) || !isset($datas_prepa)) {
                echo $twig->render('erreur_404.html.twig');
             }  else {
                echo $twig->render('recherche+_view.html.twig',['datas_recherche'=> $datas_recherche, 'datas_effet'=> $datas_effet,'datas_prepa'=> $datas_prepa, 'id'=> $id_plante]);
             }          
           

        } catch (\Exception $e) {
          echo $twig->render('erreur_404.html.twig');
      }
    }
}