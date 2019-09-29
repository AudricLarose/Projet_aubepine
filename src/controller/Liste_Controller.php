<?php
namespace Coriolis\controller;

class Liste_Controller
{
    public function montrerListe($page,$twig)
    {
        try {
            $content_onglet_titre="Listes des membres";
            $data_Listes= new \Coriolis\model\Users_Manager();
            if (is_numeric($page)) {  $page=($page-1)*2;}
            if (isset($_GET['page'])) {
 $id=$_GET['page'];
             } else {
                $id=1;
            }
            $Listes=$data_Listes->getListe($page);
            $nombre_de_joueurs=$data_Listes->nombreJoueurs();
            if ($Listes==null) {
                echo $twig->render('erreur_404.html.twig');

            }   else {         
            $nombre_de_page=(int)($nombre_de_joueurs/2);
            echo $twig->render('Liste_view.html.twig',['Listes'=> $Listes, 'nombre_de_page'=> $nombre_de_page, 'id'=> $id]);
        }
        } catch (\Exception $e) {
            echo $twig->render('erreur_404.html.twig');
        }
    }
}