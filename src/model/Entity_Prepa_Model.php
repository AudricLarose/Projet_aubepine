<?php
namespace Coriolis\model ;

class Entity_Prepa_Model 
{
	private $id;
	private $id_plante;
	private $prepa;

	public function getId() {
		return $this->id;
	}
	public function getId_Plante() {
		return $this->id_plante;
	}
	public function getPrepa() {
		return $this->prepa;
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
	public function setPrepa($prepa) {
		 $this->prepa=$prepa;
	}
	public function hydratation ($donnée){
		$this->setId($donnée['id']);
		$this->setId_Plante($donnée['id_plante']);
		$this->setPrepa($donnée['prepa']);
	}
}