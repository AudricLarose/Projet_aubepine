<?php
namespace Coriolis\controller;

class Login_Controller
{
    public function montrerLogin ($error,$twig){
        $content_onglet_titre="Connexion";
    	switch ($error) {
                        case 'wrongmailandnom':
                            $content_admin= " le mail et login sont deja en existants";
                            break;
                        case 'champs_vide':
                            $content_admin= "il faut remplir les champs avant de valider";
                            break;
                        case 'notsame':
                            $content_admin= "Les deux mots de passes doivent correspondre !";
                            break;
                        case 'meme_nom':
                            $content_admin= "Ce nom est deja pris !";
                            break;
                        case 'meme_mail':
                            $content_admin= "Ce mail est deja dans notre base de donnée, tentez de vous connecter !";
                            break;
                        case 'wrongmailform':
                            $content_admin= "Veuillez inscrire un mail valide !";
                            break;
                        case 'wrongpwd':
                            $content_admin= "La saise du mot de passe ou d'utilisateur est mauvaise !";
                            break;
                        case 'caractere':
                            $content_admin= "Attention, les caractères spéciaux ne sont pas admis !";
                            break;
                        case ' ':
                            $content_admin= " ";
                            break;
                    }
   echo $twig->render('Users_view.html.twig',['content_admin'=> $content_admin]);
 	}
 }