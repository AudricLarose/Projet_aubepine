<?php
namespace Coriolis\controller;

class QuizzController
{
    public function quizz($score, $twig,$error)
    {
        switch ($error) {
            
            case 'champs_vide':
                $content_admin= "il faut remplir les champs avant de valider";
                break;
            case 'meme_nom':
                $content_admin= "Ce nom est deja pris !";
                break;
            case 'caractere':
                $content_admin= "Attention, les caractères spéciaux ne sont pas admis !";
                break;
            case 'extension':
                $content_admin= "Le fichhier n'est pas de la bonne extension !";
                break;
            case 'taille':
                $content_admin= "Votre fichier est trop grand, nous attendons un fichier de moins d'un Mo !";
                break;
            case 'inconnu':
                $content_admin= "Une erreur est survenu lors du telechargement !";
                break;
            case ' ':
                $content_admin= " ";
                break;
        }
        if (isset($_SESSION['admin'])) {
            if ($score!= " ") {
                $getScore= new \Coriolis\model\UsersManager();
                $getScore=$getScore->insertScore($score);
                $getPlayer=$getScore->getPlayer();
            }
            $content_invite_admin='Bonjour, '.ucfirst($_SESSION['admin']);
            $name=$_SESSION['admin'];
            $content_nom=$name;
            $action= new \Coriolis\model\UsersManager();
            $getPlayer=$action->getPlayer($name);
            $score=$action->getScore($name);
            echo $twig->render('quizz_view.html.twig', ['score'=> $score, 'getPlayer'=> $getPlayer, 'content_invite_admin'=> $content_invite_admin, 'content_admin'=> $content_admin, 'name'=> $name]);
        } else {
            $content='Vous devez vous connectez avant de jouer';
        }
    }
}
