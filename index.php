<?php 
require 'controller/controller.php';
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
			recherche_plus();
			break;
		case 'montrer_documentation':
			documentation();
			break;
		case 'resultat_recherche':
			resultat_recherche();
			break;
		case 'montrer_quizz':
			quizz();
			break;
		case 'montrer_login':
			montrerLogin();
			break;
	}
} else {
initial();
}

if (isset($_POST['recherche_par_nom'])) {
	$action= new Affichage;
	$action-> recherche_par_nom();
}
if (isset($_POST['inscription'])) {
	$action= new Users_Manager;
	$action-> login();
}
if (isset($_POST['connexion'])) {
	$action= new Users_Manager;
	$action-> verifie();
}
if (isset($_POST['recherche_par_espece'])) {
	$action= new Affichage;
	$action-> recherche_par_espece();
}
if (isset($_POST['recherche_par_effet'])) {
	$action= new Affichage;
	$action-> recherche_par_effet();
}
if (isset($_POST['recherche_par_prepa'])) {
	$action= new Affichage;
	$action-> recherche_par_prepa();
}
if (isset($_POST['recherche_par'])) {
	$action= new Affichage;
	$action-> recherche_par();
}

