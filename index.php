<?php
require 'Public/Outils/Tools.php';
include 'Public/Outils/autoloader.php';

session_start();
if (isset($_GET['id_plante'])) {
	$id_plante=$_GET['id_plante'];
}
if (isset($_GET['action'])) {
	if (isset($_GET['id_plante']))
	{
			$action = $_GET['id_plante'];
	}
	$action = $_GET['action'];
	switch ($action) {
		case 'montrer_recherche':
			$action = new \controller\Recherche_Plus_Controller();
			$action->recherche_plus();
			break;
		case 'montrer_documentation':
			$action = new \controller\Documentation_Controller();
			$action->documentation();
			break;
		case 'resultat_recherche':
			$action = new \controller\Resultat_Recherche_Controller();
			$action->resultat_recherche();
			break;
		case 'montrer_quizz':
			$action = new \controller\Quizz_Controller();
			$action->quizz();
			break;
		case 'deconnection':
			$action = new \controller\deconnection_Controller();
			$action->deco();		
			break;
		case 'montrer_login':
		if (isset($_GET['error'])) {
                $error=$_GET['error'];
            } else {
                $error = " ";
            }
			$action = new \controller\Login_Controller();
			$action->montrerLogin($error);
			break;
		default:
            require 'View/erreur_404.php';
            $body= new \tools\Tools();
            $body->body($content);
            break;
	}
} else {
	$action = new \controller\Inital_Controller();
	$action->initial();
}

if (isset($_POST['recherche_par_nom'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par_nom();
}
if (isset($_POST['inscription'])) {
	$action= new \model\Users_Manager;
	$action-> login();
}
if (isset($_POST['connexion'])) {
	$action= new \model\Users_Manager;
	$action-> verifie();
}
if (isset($_POST['recherche_par_espece'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par_espece();
}
if (isset($_POST['recherche_par_effet'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par_effet();
}
if (isset($_POST['recherche_par_prepa'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par_prepa();
}
if (isset($_POST['recherche_par'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par();
}