<?php
namespace Coriolis\controller;

class Resultat_Recherche_Controller
{
    public function resultat_recherche($twig){
        try
        {
            $resultats= null;
            $content_onglet_titre="Resultat Recherche";
            $resultat_recherche= new \Coriolis\model\SearchManager_Model;
            $resultat_recherche_par_nom= $resultat_recherche->recherche_par_nom();
            $resultat_recherche_par_prepa= $resultat_recherche->recherche_par_prepa();
            $resultat_recherche_par_espece= $resultat_recherche->recherche_par_espece();
            $resultat_recherche_par_effet= $resultat_recherche->recherche_par_effet();
            $wordcloud_noms= $resultat_recherche->wordCloud_by('nom','plantes');
            $wordcloud_prepas= $resultat_recherche->wordCloud_by('prepa','prepa');
            $wordcloud_especes= $resultat_recherche->wordCloud_by('espece','plantes');
            $wordcloud_effets= $resultat_recherche->wordCloud_by('effet','effet');
            if (isset($resultat_recherche_par_nom)) {
                $resultats=$resultat_recherche_par_nom;
            }
            if (isset($resultat_recherche_par_prepa)) {
                $resultats=$resultat_recherche_par_prepa;
            }
            if (isset($resultat_recherche_par_espece)) {
                $resultats=$resultat_recherche_par_espece;
            }
            if (isset($resultat_recherche_par_effet)) {
                $resultats=$resultat_recherche_par_effet;
            }
            $requete=$resultats[0]['requete'];
            echo $twig->render('resultat_recherche_view.html.twig',[ "resultats"=>$resultats,'wordcloud_noms'=> $wordcloud_noms,'requete'=> $requete, 'wordcloud_prepas'=> $wordcloud_prepas, 'wordcloud_especes'=> $wordcloud_especes, 'wordcloud_effets'=> $wordcloud_effets]);
        } catch (\Exception $e) {
            echo $twig->render('error_404.html.twig');
        }

    }
}