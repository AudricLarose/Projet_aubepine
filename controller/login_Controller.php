<?php
namespace controller;

class Login_Controller
{
    public function montrerLogin ($error){
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
                        case 'wrongmailform':
                            $content_admin= "Veuillez inscrire un mail valide !";
                            break;
                        case ' ':
                            $content_admin= " ";
                            break;
                    }
    require 'view/Users_view.php';
     $action= new \tools\Tools();
    $action->body($content,$content_onglet_titre);
 	}
 }