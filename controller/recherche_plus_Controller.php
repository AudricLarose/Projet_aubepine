<?php
namespace controller;

class Recherche_Plus_Controller
{
    public function recherche_plus()
    {
        try {
            $content_onglet_titre="Classement et recherche";
            if (isset($_GET['id_plante'])) {
                $id_plante=$_GET['id_plante'];
            } else {
                require 'View/erreur_404.php';
                $content_onglet_titre="erreur_404";
                $body= new \tools\Tools();
                $body->body($content);
                }
            $datas_recherche= new \model\SearchManager_Model;
            $datas_recherche= $datas_recherche->Selected_Data();
            $datas_effet= new \model\EffetManager_Model();
            $datas_effet=$datas_effet->showEffect();
            $datas_prepa= new \model\PrepaManager_Model();
            $datas_prepa=$datas_prepa->showPrepa();
            var_dump($datas_effet);
            var_dump($datas_prepa);
            require 'view/recherche+_view.php';
            $action= new \tools\Tools();
            $action->body($content,$content_onglet_titre);
        } catch (\Exception $e) {
            $content = $e->getMessage();
            $body= new \tools\Tools();
            $body->body($content, $content_onglet_titre);
        }
    }
}