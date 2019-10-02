<?php
namespace Coriolis\controller;

class InitialController
{
    public function initial($twig)
    {
    	echo $twig->render('initial.html.twig');
    }
}
