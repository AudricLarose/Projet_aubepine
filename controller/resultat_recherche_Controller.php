<?php
namespace controller;

class Resultat_Recherche_Controller
{
    public function resultat_recherche(){
        try
        {
            $content_onglet_titre="Resultat Recherche";        
            $resultat_recherche= new \model\SearchManager_Model;
            $resultat_recherche_par_nom= $resultat_recherche->recherche_par_nom();
            $resultat_recherche_par_prepa= $resultat_recherche->recherche_par_prepa();
            $resultat_recherche_par_espece= $resultat_recherche->recherche_par_espece();
            $resultat_recherche_par_effet= $resultat_recherche->recherche_par_effet();
            $wordcloud_noms= $resultat_recherche->wordCloud_by('nom');
            $wordcloud_prepas= $resultat_recherche->wordCloud_by('prepa_1');
            $wordcloud_especes= $resultat_recherche->wordCloud_by('espece');
            $wordcloud_effets= $resultat_recherche->wordCloud_by('effet_1');
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
            require 'view/resultat_recherche_view.php';
            $action= new \tools\Tools();
            $action->body($content,$content_onglet_titre);
        } catch (\Exception $e) {
                $content = $e->getMessage();
                $body= new \outils\Tools();
                $body->body($content, $content_onglet_titre);
        }

    }
}