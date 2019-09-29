<?php
namespace Coriolis\controller;

class Deconnection_controller
{
    public function deco()
    {
    	try {
            $_SESSION['admin']= array();
            session_destroy();
            header('location:index.php');
        } catch (\Exception $e) {
                echo $twig->render('error_404.html.twig');
        }
    }
}
