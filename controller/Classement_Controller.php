<?php
namespace controller;

class Classement_Controller
{
    public function montrerClassement($page,$twig)
    {
        try {
            $content_onglet_titre="Classement joueur";
            $data_classements= new \model\Users_Manager();
            $page=($page-1)*2;
            $classements=$data_classements->getClassement($page);
            $nombre_de_joueurs=$data_classements->nombreJoueurs();
            $nombre_de_page=(int)($nombre_de_joueurs/2);            
            echo $twig->render('classement_view.html.twig',['classements'=> $classements, 'nombre_de_page'=> $nombre_de_page]);
        } catch (\Exception $e) {
            $content = $e->getMessage();
            $body= new \tools\Tools();
            $body->body($content, $content_onglet_titre);
        }
    }
}