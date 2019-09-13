<?php
namespace controller;

class Deconnection_controller
{
    public function deco()
    {
        $_SESSION['admin']= array();
        session_destroy();
        header('location:index.php');
    }
}