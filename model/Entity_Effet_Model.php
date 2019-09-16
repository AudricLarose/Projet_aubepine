<?php
namespace model ;

class Entity_Effet_Model 
{
	private $id;
	private $id_plante;
	private $effet;

	public function getId() {
		return $this->id;
	}
	public function getId_Plante() {
		return $this->id_plante;
	}
	public function getEffet() {
		return $this->effet;
	}
	
	public function setId($id) {
		$this->id=$id;
	}
	public function setNom($nom) {
		 $this->nom=$nom;
	}
	public function setId_Plante($id_plante) {
		 $this->id_plante=$id_plante;
	}
	public function setEffet($effet) {
		 $this->effet=$effet;
	}
	public function hydratation ($donnée) {
		$this->setId($donnée['id']);
		$this->setId_Plante($donnée['id_plante']);
		$this->setEffet($donnée['effet']);
	}
}