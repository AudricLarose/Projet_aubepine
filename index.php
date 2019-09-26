<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require 'Public/Outils/Tools.php';
include_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('view'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
      'cache' => false
    ));

	$actions = new Coriolis\controller\Init_Controller();
	$actions->init();
session_start();
 	$sessions= new \tools\Tools();
        $session=$sessions->sessionactive();
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
			$action = new Coriolis\controller\Recherche_Plus_Controller();
			$action->recherche_plus($twig);
			break;
		case 'montrer_documentation':
			$action = new Coriolis\controller\Documentation_Controller();
			$action->documentation($twig);
			break;
		case 'resultat_recherche':
			$action = new Coriolis\controller\Resultat_Recherche_Controller();
			$action->resultat_recherche($twig);
			break;
		case 'montrer_quizz':
		if (isset($_SESSION['admin'])) {
			if (isset($_POST['score'])) {
                $score=$_POST['score'];
            } else {
            	$score = " ";
            }
   			$action = new Coriolis\controller\Quizz_Controller();
			$action->quizz($score,$twig);
			break;
		} else {
			if (isset($_GET['error'])) {
                $error=$_GET['error'];
            } else {
                $error = " ";
            }
			$action = new Coriolis\controller\Login_Controller();
			$action->montrerLogin($error,$twig);
			break;
		}	
		case 'ajax_score':
		if (isset($_SESSION['admin'])) {
			if (isset($_POST['score'])) {
                $score=$_POST['score'];
            } else {
            	$score = " ";
            }
   			$action = new Coriolis\controller\Ajax_Score_Controller();
			$action->ajax_score($score);
			break;
		}
		case 'ajax_plante':
   			$action = new Coriolis\controller\Ajax_Score_Controller();
			$action->ajax_plante();
			break;
		case 'ajax_getId':
		if (isset($_POST['name'])) {
                $name=$_POST['name'];
            } else {
            	$name = " ";
            }
   			$action = new Coriolis\controller\Ajax_Score_Controller();
			$action->ajax_getId($name);
			break;
		case 'deconnection':
			$action = new Coriolis\controller\deconnection_Controller();
			$action->deco();		
			break;
		case 'montrer_liste':
			if (isset($_GET['page']) ) {
				$page=$_GET['page'];
			} else {
				$page=1;
			}
			$action = new Coriolis\controller\Classement_Controller();
			$action->montrerClassement($page,$twig);
			break;
		case 'score':
			if (isset($_POST['score'])) {
				$score=isset($_POST['score']);
			} else { 
				$score= " ";
			}
			$action = new Coriolis\controller\Quizz_Controller();
			$action->quizz_score($score);
			break;
		default:
            echo $twig->render('erreur_404.html.twig');

            break;
	}
} else {
	$action = new Coriolis\controller\Inital_Controller();
	$action->initial($twig);
}