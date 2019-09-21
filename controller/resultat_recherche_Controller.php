<?php
namespace controller;

class Resultat_Recherche_Controller
{
    public function resultat_recherche($twig){
        try
        {
            $resultats= null;
            $content_onglet_titre="Resultat Recherche";
            $resultat_recherche= new \model\SearchManager_Model;
            $resultat_recherche_par_nom= $resultat_recherche->recherche_par_nom();
            $resultat_recherche_par_nom_effet= $resultat_recherche->recherche_effet();
            $resultat_recherche_par_nom_prepa= $resultat_recherche->recherche_prepa();
            $resultat_recherche_par_prepa= $resultat_recherche->recherche_par_prepa();
            $resultat_recherche_par_espece= $resultat_recherche->recherche_par_espece();
            $resultat_recherche_par_effet= $resultat_recherche->recherche_par_effet();
            $wordcloud_noms= $resultat_recherche->wordCloud_by('nom');
            $wordcloud_prepas= $resultat_recherche->wordCloud_by('prepa_1');
            $wordcloud_especes= $resultat_recherche->wordCloud_by('espece');
            $wordcloud_effets= $resultat_recherche->wordCloud_by('effet_1');
            if (isset($resultat_recherche_par_nom)) {
                $resultats=$resultat_recherche_par_nom;
                $resultats_effet=$resultat_recherche_par_nom_effet;
                $resultats_prepa=$resultat_recherche_par_nom_prepa;
                var_dump($resultats);
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
            var_dump($resultats_effet);
            echo $twig->render('resultat_recherche_view.html.twig',[ "resultats"=>$resultats,'resultats_effet'=> $resultats_effet,'resultats_prepa'=> $resultats_prepa,'wordcloud_noms'=> $wordcloud_noms, 'wordcloud_prepas'=> $wordcloud_prepas, 'wordcloud_especes'=> $wordcloud_especes, 'wordcloud_effets'=> $wordcloud_effets]);
        } catch (\Exception $e) {
                $content = $e->getMessage();
        }

    }
}