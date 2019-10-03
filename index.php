<?php
require 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
      'cache' => false
));
error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();
$actions = new Coriolis\controller\InitController();
$actions->init();
if (isset($_GET['id_plante'])) {
    $id_plante=$_GET['id_plante'];
}
if (isset($_GET['action'])) {
    if (isset($_GET['id_plante'])) {
            $action = $_GET['id_plante'];
    }
    $action = $_GET['action'];
    switch ($action) {
        case 'montrer_recherche':
            $action = new Coriolis\controller\RecherchePlusController();
            $action->recherchePlus($twig);
            break;
        case 'montrer_documentation':
            $action = new Coriolis\controller\DocumentationController();
            $action->documentation($twig);
            break;
        case 'resultat_recherche':
            $action = new Coriolis\controller\ResultatRechercheController();
            $action->resultatRecherche($twig);
            break;
        case 'montrer_quizz':
            if (isset($_SESSION['admin'])) {
                if (isset($_POST['score'])) {
                    $score=$_POST['score'];
                } else {
                    $score = " ";
                }
                if (isset($_GET['error'])) {
                    $error=$_GET['error'];
                } else {
                    $error = " ";
                }
                $action = new Coriolis\controller\QuizzController();
                $action->quizz($score, $twig, $error);
            } else {
                if (isset($_GET['error'])) {
                    $error=$_GET['error'];
                } else {
                    $error = " ";
                }
                $action = new Coriolis\controller\LoginController();
                $action->montrerLogin($error, $twig);
                }
                break;
            
        case 'ajax_score':
            if (isset($_SESSION['admin'])) {
                if (isset($_POST['score'])) {
                    $score=$_POST['score'];
                } else {
                    $score = " ";
                }
                $action = new Coriolis\controller\AjaxScoreController();
                $action->ajaxScore($score);
                break;
            }
        case 'ajax_plante':
            $action = new Coriolis\controller\AjaxScoreController();
            $action->ajaxPlante();
            break;
        case 'ajax_getId':
            if (isset($_POST['name'])) {
                $name=$_POST['name'];
            } else {
                $name = " ";
            }
            $action = new Coriolis\controller\AjaxScoreController();
            $action->ajaxGetId($name);
            break;
        case 'deconnection':
            $action = new Coriolis\controller\deconnectionController();
            $action->deco();
            break;
        case 'montrer_liste':
            if (isset($_GET['page']) ) {
                $page=$_GET['page'];
            } else {
                $page=1;
            }
            $action = new Coriolis\controller\ListeController();
            $action->montrerListe($page, $twig);
            break;
        case 'score':
            if (isset($_POST['score'])) {
                $score=isset($_POST['score']);
            } else {
                $score= " ";
            }
            $action = new Coriolis\controller\QuizzController();
            $action->quizzScore($score);
            break;
        default:
            echo $twig->render('erreur_404.html.twig');
            break;
    }
} else {
    $action = new Coriolis\controller\InitialController();
    $action->initial($twig);
}
