<?php
class Connexion {
	private $serveur='localhost';
	private $name='root';
	private $passwword='';
	private $bddname='remede';
	public function connected(){
		try {
		$conn= new PDO ('mysql:host='.$this->serveur.';charset=utf8;dbname='.$this->bddname,$this->name,$this->passwword);
		return $conn;
 } catch (Exception $e){
 	echo ' connexion echouée a la base de donnée';
 }
	}
}