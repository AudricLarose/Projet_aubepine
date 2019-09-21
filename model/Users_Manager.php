<?php
namespace model;

include_once 'Model/connexion.model.php';
class Users_Manager extends Connexion
{
    public function login($fileNameNew)
    {
        $username=$_POST['nom'];
        $password=$_POST['password'];
        $password_repeat=$_POST['password_repeat'];
        $mail=$_POST['mail'];
        if (empty($username) || empty($password) || empty($mail) || empty($password_repeat)) {
            header('location:index.php?action=montrer_login&error=champs_vide');
            exit();
        }else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header('location:index.php?action=montrer_login&error=wrongmailandnom');
            exit(); 
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            header('location:index.php?action=montrer_login&error=wrongmailform');
            exit();
        }elseif ($password!==$password_repeat) {
            header('location:index.php?action=montrer_login&error=notsame');
            exit();
        } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
             header('location:index.php?montrer_login&error=meme_nom');
            exit();
        } else {
            if (!isset($fileNameNew)) {
                $fileNameNew=0;
            }
            $hashepwd=password_hash($password, PASSWORD_DEFAULT);
            $req="INSERT INTO user1 (user, mail, password,img,score) VALUES (?,?,?,?,0)";
            $resultat=$this->connected()->prepare($req);
            $resultat->execute([$username,$mail,$hashepwd,$fileNameNew]);
        }
    }
    public function verifie()
    {
        $username=$_POST['nom'];
        $password=$_POST['password'];
        if (empty($username) || (empty($password))) {
            header('location:index.php?action=montrer_login&error=champs_vide');
            exit();
        } else {
            $req="SELECT* FROM user1 WHERE user=?;";
            $sql=$this->connected()->prepare($req);
            $sql->execute([$username]);
            if (isset($sql)) {
                while ($ssql=$sql->fetch()) {
                  $passwordcheck=password_verify($password, $ssql['password']);
                 if ($passwordcheck==true) {
                    $data[]=$ssql;
                    var_dump($data);
                     session_start();
                     $_SESSION['admin']= $data[0]['user'];
                     $name=$data[0]['user'];
                     header('location:index.php?action=montrer_quizz&$name='.$name);
                 } else {
                     header('location:index.php?action=montrer_admin&error=wrongpwd');
                    }
                }
            } else {
                header('location:index.php?action=montrer_admin&error=wrongpwd');
            }
        }
    }
    public function getScore($user)
    {
        $req="SELECT score FROM user1 WHERE user='".$user."'";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
        if($resultat->rowCount()){
            if($resultat->rowCount()){
                while ($x=$resultat->fetch()){
                $data[]=$x;
                }
            }
            return $data[0][0];
            } else {
                echo "pas de resultat";
        }
    }
    public function getClassement($x)
    {
        $req="SELECT * FROM user1 ORDER by score DESC LIMIT ".$x.",2";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
        if($resultat->rowCount()){
                $nombre_de_joueurs=$resultat->rowCount();
                while ($x=$resultat->fetch()){
                $data[]=$x;
                }
            foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_User_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            $dataz[]=["nombre_de_joueurs" => $nombre_de_joueurs ];
            $dataz[]=$datae;
            return $dataz;
            } else {
                echo "pas de resultat";
        }
    }
    public function nombreJoueurs()
    {
        $req="SELECT * FROM user1 ORDER by score DESC ";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
        $nombre_de_joueurs=$resultat->rowCount();
        return $nombre_de_joueurs;
    }

    public function insertScore($score){
        $username=$_SESSION['admin'];
        $req="UPDATE user1 SET score=".$score." WHERE user='".$username."'";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
    }
}
