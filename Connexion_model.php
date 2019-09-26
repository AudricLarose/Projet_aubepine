<?php
namespace Coriolis\model;

class Connexion_model {
    private $serveur='audriclait292.mysql.db';
    private $name='audriclait292';
    private $passwword='82941858Aca';
    private $bddname='audriclait292';
    public function connected(){
        try {
        $conn= new \PDO ('mysql:host='.$this->serveur.';charset=utf8;dbname='.$this->bddname,$this->name,$this->passwword);
        return $conn;
 } catch (Exception $e){
    echo ' connexion echouée a la base de donnée';
 }
    }
}
