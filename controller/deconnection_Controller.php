<?php
namespace controller;

class Deconnection_controller
{
    public function deco()
    
    {
    	try{
        $_SESSION['admin']= array();
        session_destroy();
        header('location:index.php');
    	} catch (\Exception $e) {
            $content = $e->getMessage();
            $body= new \outils\Tools();
            $body->body($content, $content_onglet_titre);
        }
    }
}