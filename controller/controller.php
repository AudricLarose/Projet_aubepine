<?php
require './model/SearchManager.model.php';
require './model/UserManager.model.php';

function initial () 
{   
    $content_body= ' ';
    body($content_body);
}
 function recherche_plus()
 {
	if (isset($_GET['id_plante'])) {
	$id_plante=$_GET['id_plante'];
	}
	$datas_recherche= new Affichage;
	$datas_recherche= $datas_recherche->Selected_Data();
    require 'view/recherche+_view.php';
    body($content);
 }
 function documentation()
 {
    $abcd_tab=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    for ($i=0; $i < 24; $i++) {
       $datas= new Affichage;
       $datas=$datas->searchDataByLetter($abcd_tab[$i]);
       if (isset($datas)) {
           $dataz[$abcd_tab[$i]]=$datas;
        }
    }
    require 'view/recherche_view.php';
    body($content);
}
function body($content_body){
    require 'view/template_view.php';
 }
function montrerLogin (){
    require 'view/Users_view.php';
    body($content);

 }
function resultat_recherche(){
    $resultat_recherche= new Affichage;
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
    body($content);
}

function quizz()
 {
    require 'view/quizz_view.php';
    body($content);
}
