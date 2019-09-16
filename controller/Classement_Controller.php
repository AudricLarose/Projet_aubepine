<?php
namespace controller;

class Classement_Controller
{
    public function montrerClassement($page)
    {
        try {
            $content_onglet_titre="Classement joueur";
            $data_classements= new \model\Users_Manager();
            $page=($page-1)*2;
            $classements=$data_classements->getClassement($page);
            $nombre_de_joueurs=$data_classements->nombreJoueurs();
            $nombre_de_page=(int)($nombre_de_joueurs/2);
            var_dump($classements);
            var_dump($nombre_de_page);
            require 'view/classement_view.php';
            $action= new \tools\Tools();
            $action->body($content,$content_onglet_titre);
        } catch (\Exception $e) {
            $content = $e->getMessage();
            $body= new \tools\Tools();
            $body->body($content, $content_onglet_titre);
        }
    }
}