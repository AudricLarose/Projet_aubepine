<?php
include_once 'Model/connexion.model.php';
class Users_Manager extends Connexion
{
    public function login()
    {
        $username=$_POST['nom'];
        $password=$_POST['password'];
        $password_repeat=$_POST['password_repeat'];
        $mail=$_POST['mail'];

        if (empty($username) || empty($password) || empty($mail) || empty($password_repeat)) {
            header('location:index.php?action=champs_vide');
            exit();
        }else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header('location:index.php?montrer_login&action=champs_vide');
            exit(); 
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            header('location:index.php?montrer_login&action=champs_viden');
            exit();
        }elseif ($password!==$password_repeat) {
            header('location:index.php?montrer_login&action=champs_videnn');
            exit();
        } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)){ {
             header('location:index.php?montrer_login&action=champs_videnn');
            exit();
        }
        } else {
            $hashepwd=password_hash($password, PASSWORD_DEFAULT);
            $req="INSERT INTO user1 (user, mail, password) VALUES (?,?,?)";
            $resultat=$this->connected()->prepare($req);
            $resultat->execute([$username,$mail,$hashepwd]);
        }
    }
    public function verifie()
    {
        $username=$_POST['nom'];
        $password=$_POST['password'];
        if (empty($username) || (empty($password))) {
            header('location:index.php?action=montrer_admin&error=champs_vide');
            exit();
        } else {
            $req="SELECT* FROM user1 WHERE user=?;";
            $sql=$this->connected()->prepare($req);
            $sql->execute([$username]);
            if (isset($sql)) {
                while ($ssql=$sql->fetch()) {
                  $passwordcheck=password_verify($password, $ssql['password']);
                 if ($passwordcheck==true) {
                     session_start();
                     $_SESSION['admin']= 'ok';
                     header('location:index.php');
                 } else {
                     header('location:index.php?action=montrer_admin&error=wrongpwd');
                    }
                }
            } else {
                header('location:index.php?action=montrer_admin&error=wrongpwd');
            }
        }
    }
}
