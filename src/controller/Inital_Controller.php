<?php
namespace Coriolis\controller;

class Inital_Controller
{
    public function initial($twig)
    {
    	echo $twig->render('initial.html.twig');
    }
}
