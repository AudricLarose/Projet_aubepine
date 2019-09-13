<?php
namespace controller;

include 'Public/Outils/autoloader_model.php';
class Inital_Controller
{
    public function initial () 
    {
    $content_onglet_titre="Index";
    $content_body= ' ';
    $action= new \tools\Tools();
    $action->body($content_body,$content_onglet_titre);
    }
}
