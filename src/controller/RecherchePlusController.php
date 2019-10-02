<?php
namespace Coriolis\controller;

class RecherchePlusController
{
    public function recherchePlus($twig)
    {
        try {
            if (isset($_GET['id_plante'])) {
                $id_plante=$_GET['id_plante'];
            } else {
                echo $twig->render('erreur_404.html.twig');
            }
            $datas_recherche= new \Coriolis\model\SearchManagerModel;
            $datas_recherche= $datas_recherche->selectedData();
            $datas_effet= new \Coriolis\model\EffetManagerModel();
            $datas_effet=$datas_effet->showEffect();
            $datas_prepa= new \Coriolis\model\PrepaManagerModel();
            $datas_prepa=$datas_prepa->showPrepa();
            if (!isset($datas_effet) || !isset($datas_prepa)) {
                echo $twig->render('erreur_404.html.twig');
            } else {
                echo $twig->render('recherche+_view.html.twig',['datas_recherche'=> $datas_recherche, 'datas_effet'=> $datas_effet,'datas_prepa'=> $datas_prepa, 'id'=> $id_plante]);
            }
        } catch (\Exception $e) {
            echo $twig->render('erreur_404.html.twig');
        }
    }
}
