<?php
namespace model ;

class Entity_Search_Model 
{
	private $id;
	private $nom;
	private $espece;

	public function getId() {
		return $this->id;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getEspece() {
		return $this->espece;
	}
	public function setId($id) {
		$this->id=$id;
	}
	public function setNom($nom) {
		 $this->nom=$nom;
	}
	public function setEspece($espece) {
		 $this->espece=$espece;
	}
	public function hydratation ($donnée){
		$this->setId($donnée['id']);
		$this->setNom($donnée['nom']);
		$this->setEspece($donnée['espece']);
	}
}