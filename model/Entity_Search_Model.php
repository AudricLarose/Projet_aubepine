<?php
namespace model ;

class Entity_Search_Model 
{
	private $id;
	private $id_plante;
	private $nom;
	private $effet_1;
	private $effet_2;
	private $effet_3;
	private $prepa_1;
	private $prepa_2;
	private $prepa_3;
	private $effet_4;
	private $espece;

	public function getId() {
		return $this->id;
	}
	public function getIdPlante() {
		return $this->id_plante;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getEffet_1() {
		return $this->effet_1;
	}
	public function getEffet_2() {
		return $this->effet_2;
	}
	public function getEffet_3() {
		return $this->effet_3;
	}
	public function getPrepa_1() {
		return $this->prepa_1;
	}
	public function getPrepa_2() {
		return $this->prepa_2;
	}
	public function getPrepa_3() {
		return $this->prepa_3;
	}
	public function getEffet_4() {
		return $this->effet_4;
	}
	public function getEspece() {
		return $this->espece;
	}
	public function setId($id) {
		$this->id=$id;
	}
	public function setIdPlante($id_plante) {
		$this->id_plante=$id_plante;
	}
	public function setNom($nom) {
		 $this->nom=$nom;
	}
	public function setEffet_1($effet_1) {
		 $this->effet_1=$effet_1;
	}
	public function setEffet_2($effet_2) {
		 $this->effet_2=$effet_2;
	}
	public function setEffet_3($effet_3) {
		 $this->effet_3=$effet_3;
	}
	public function setPrepa_1($prepa_1) {
		 $this->prepa_1=$prepa_1;
	}
	public function setPrepa_2($prepa_2) {
		 $this->prepa_2=$prepa_2;
	}
	public function setPrepa_3($prepa_3) {
		 $this->prepa_3=$prepa_3;
	}
	public function setEffet_4($effet_4) {
		 $this->effet_4=$effet_4;
	}
	public function setEspece($espece) {
		 $this->espece=$espece;
	}
	public function hydratation ($donnée){
		$this->setId($donnée['id']);
		$this->setIdPlante($donnée['id_plante']);
		$this->setNom($donnée['nom']);
		$this->setEffet_1($donnée['effet_1']);
		$this->setEffet_2($donnée['effet_2']);
		$this->setEffet_3($donnée['effet_3']);
		$this->setPrepa_1($donnée['prepa_1']);
		$this->setPrepa_2($donnée['prepa_2']);
		$this->setPrepa_3($donnée['prepa_3']);
		$this->setEffet_4($donnée['effet_4']);
		$this->setEspece($donnée['espece']);
	}
}