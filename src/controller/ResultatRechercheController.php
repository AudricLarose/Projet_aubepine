<?php
namespace Coriolis\controller;

class ResultatRechercheController                       // sert d'intermediaire
{
    public function resultatRecherche($twig)        
    {
        try {
            $resultats= null;
            $resultat_recherche= new \Coriolis\model\SearchManagerModel;
            $resultat_recherche_par_nom= $resultat_recherche->rechercheParNom();
            $resultat_recherche_par_prepa= $resultat_recherche->rechercheParPrepa();
            $resultat_recherche_par_espece= $resultat_recherche->rechercheParEspece();
            $resultat_recherche_par_effet= $resultat_recherche->rechercheParEffet();
            $wordcloud_noms= $resultat_recherche->wordCloudBy('nom', 'plantes');  
            $wordcloud_prepas= $resultat_recherche->wordCloudBy('prepa', 'prepa');
            $wordcloud_especes= $resultat_recherche->wordCloudBy('espece', 'plantes');
            $wordcloud_effets= $resultat_recherche->wordCloudBy('effet', 'effet');
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
            echo $twig->render('resultat_recherche_view.html.twig', [ "resultats"=>$resultats, 'wordcloud_noms'=> $wordcloud_noms, 'requete'=> $requete, 'wordcloud_prepas'=> $wordcloud_prepas, 'wordcloud_especes'=> $wordcloud_especes, 'wordcloud_effets'=> $wordcloud_effets]);
        } catch (\Exception $e) {
            echo $twig->render('error_404.html.twig');
        }
    }
}
