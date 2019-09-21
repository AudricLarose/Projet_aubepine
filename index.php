<?php
require 'Public/Outils/Tools.php';
include 'Public/Outils/autoloader.php';
include_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('view'); // Dossier contenant les templates
$twig = new Twig_Environment($loader, array(
      'cache' => false
    ));

if (isset($_POST['saisie_recherche_par_nom'])) {
	$action= new \model\SearchManager_Model();
	$action->recherche_par_nom();
	$action->recherche_effet();
}

if (isset($_POST['inscription'])) {
	$file=$_FILES['file'];
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	$fileExt=explode('.', $fileName);
	$fileActualExt= strtolower(end($fileExt));
	$allowed = array('jpg','jpeg','png');
	if (in_array($fileActualExt, $allowed)){
		if ($fileError===0){
			if ($fileSize<1000000){
				$fileNameNew=uniqid('',true).".".$fileActualExt;
				$fileDestination = 'upload/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
				echo "trop grand";
			}
		} else {
			echo "erreur";
		}
	} else { echo "erreur: ce n'est pas la bonne extension"; }
	$action= new \model\Users_Manager;
	$action-> login($fileActualExt,$fileNameNew);
}
if (isset($_POST['connexion'])) {
	$action= new \model\Users_Manager;
	$action-> verifie();
}
if (isset($_POST['saisie_recherche_par_espece'])) {
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
			$action->recherche_plus($twig);
			break;
		case 'montrer_documentation':
			$action = new \controller\Documentation_Controller();
			$action->documentation($twig);
			break;
		case 'resultat_recherche':
			$action = new \controller\Resultat_Recherche_Controller();
			$action->resultat_recherche($twig);
			break;
		case 'montrer_quizz':
		if (isset($_SESSION['admin'])) {
			if (isset($_POST['score'])) {
                $score=$_POST['score'];
            } else {
            	$score = " ";
            }
   			$action = new \controller\Quizz_Controller();
			$action->quizz($score,$twig);
			break;
		} else {
			if (isset($_GET['error'])) {
                $error=$_GET['error'];
            } else {
                $error = " ";
            }
			$action = new \controller\Login_Controller();
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
   			$action = new \controller\Ajax_Score_Controller();
			$action->ajax_score($score);
			break;
		}
		case 'ajax_plante':
   			$action = new \controller\Ajax_Score_Controller();
			$action->ajax_plante();
			break;
		case 'ajax_getId':
		if (isset($_POST['name'])) {
                $name=$_POST['name'];
            } else {
            	$name = " ";
            }
   			$action = new \controller\Ajax_Score_Controller();
			$action->ajax_getId($name);
			break;
		case 'deconnection':
			$action = new \controller\deconnection_Controller();
			$action->deco();		
			break;
		case 'montrer_classement':
			if (isset($_GET['page'])) {
				$page=$_GET['page'];
			} else {
				$page=1;
			}
			$action = new \controller\Classement_Controller();
			$action->montrerClassement($page,$twig);
			break;
		case 'score':
			if (isset($_POST['score'])) {
				$score=isset($_POST['score']);
			} else { 
				$score= " ";
			}
			$action = new \controller\Quizz_Controller();
			$action->quizz_score($score);
			break;
		default:
			$onglet='erreur_404';
            require 'View/erreur_404.php';
            $body= new \tools\Tools();
            $body->body($content,$onglet);
            break;
	}
} else {
	$action = new \controller\Inital_Controller();
	$action->initial();
}