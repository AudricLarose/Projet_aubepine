<?php
namespace Coriolis\model;

class Users_Manager extends Connexion_model
{
    public function getPlayer($name)
{
    $req="SELECT * FROM user1 WHERE user=?";
    $resultat=$this->connected()->prepare($req);
    $resultat->execute([$name]);
    if($resultat->rowCount()){
        $nombre_de_joueurs=$resultat->rowCount();
        while ($x=$resultat->fetch()){
            $data[]=$x;
        }
        foreach ($data as $datas) {
            $data_hydrated= new \Coriolis\model\Entity_User_Model();
            $data_hydrated->hydratation($datas);
            $datae[]=$data_hydrated;
        }
        return $datae;
    } else {
        echo "pas de resultat";
    }
}
    public function login($fileNameNew)
    {
        $username=$_POST['nom'];
        $password=$_POST['password'];
        $password_repeat=$_POST['password_repeat'];
        $mail=$_POST['mail'];
        if (empty($username) || empty($password) || empty($mail) || empty($password_repeat)) {
            header('location:index.php?action=montrer_quizz&error=champs_vide');
            exit();
        }else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header('location:index.php?action=montrer_quizz&error=wrongmailandnom');
            exit(); 
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            header('location:index.php?action=montrer_quizz&error=wrongmailform');
            exit();
        }elseif ($password!==$password_repeat) {
            header('location:index.php?action=montrer_quizz&error=notsame');
            exit();
        } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
           header('location:index.php?action=montrer_quizz&error=caractere');
           exit();
        } else {
        $sql ="SELECT * FROM user1 WHERE user=?";
        $result=$this->connected()->prepare($sql);
        $result->execute([$username]);
        $results=$result->rowCount();
        if ($results>0) {
         header('location:index.php?action=montrer_quizz&error=meme_nom');
         exit();
        } else  {
        $sql ="SELECT * FROM user1 WHERE mail=?";
        $result=$this->connected()->prepare($sql);
        $result->execute([$mail]);
        $results=$result->rowCount();
        if ($results>0) {
         header('location:index.php?action=montrer_quizz&error=meme_mail');
         exit();

        } else {
        if (!isset($fileNameNew)) {
            $fileNameNew=0;
        }

        $hashepwd=password_hash($password, PASSWORD_DEFAULT);
        $req="INSERT INTO user1 (user, mail, password,img,score) VALUES (?,?,?,?,0)";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$username,$mail,$hashepwd,$fileNameNew]);
        session_start();
        $_SESSION['admin']= $username;
        header('location:index.php?action=montrer_quizz&name='.$username);
    }
}
}
}
  public function modifier_nom($ancienname){
        $username=$_POST['new_name'];
        if (empty($username)) {
            header('location:index.php?action=montrer_quizz&error=champs_vide');
            exit();
        } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
           header('location:index.php?action=montrer_quizz&error=caractere');
           exit();
        } else {
        $sql ="SELECT * FROM user1 WHERE user=?";
        $result=$this->connected()->prepare($sql);
        $result->execute([$username]);
        $results=$result->rowCount();
        if ($results>0) {
         header('location:index.php?action=montrer_quizz&error=meme_nom');
         exit();

        } else {
        $req="UPDATE user1 SET user = ? WHERE user=?";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$username,$ancienname]);
        $_SESSION['admin']= array();
        session_destroy();
        session_start();
        $_SESSION['admin']= $username;
        header('location:index.php?action=montrer_quizz&name='.$username);
    }
}
}

 public function modifier_photo($fileNameNew,$name){
        var_dump($fileNameNew);
        $req="UPDATE user1 SET img = ? WHERE user=?";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$fileNameNew,$name]);
        header('location:index.php?action=montrer_quizz&name='.$username);

    }

public function verifie()
{
    $username=$_POST['nom_connexion'];
    $password=$_POST['password_connexion'];
    if (empty($username) || (empty($password))) {
        header('location:index.php?action=montrer_quizz&error=champs_vide');
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
       header('location:index.php?action=montrer_quizz&error=caractere');
       exit();
   } else {
    $req="SELECT* FROM user1 WHERE user=?;";
    $sql=$this->connected()->prepare($req);
    $sql->execute([$username]);
    if (isset($sql)) {
        while ($ssql=$sql->fetch()) {
          $passwordcheck=password_verify($password, $ssql['password']);
          if ($passwordcheck===true) {
            $data[]=$ssql;
            session_start();
            $_SESSION['admin']= $data[0]['user'];
            $name=$data[0]['user'];
            header('location:index.php?action=montrer_quizz');
        } else {
           header('location:index.php?action=montrer_quizz&error=wrongpwd');
       }                    
       }
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

public function getListe($x)
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
            $data_hydrated= new \Coriolis\model\Entity_User_Model();
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
    $req="UPDATE user1 SET score=".$score." WHERE user=?";
    $resultat=$this->connected()->prepare($req);
    $resultat->execute([$username]);
}
}