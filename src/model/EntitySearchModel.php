<?php
namespace Coriolis\model ;

class EntitySearchModel
{
    private $id;
    private $nom;
    private $espece;
    private $effet;
    private $prepa;
    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getEspece()
    {
        return $this->espece;
    }
    public function getEffet()
    {
        return $this->effet;
    }
    public function getPrepa()
    {
        return $this->prepa;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function setNom($nom)
    {
         $this->nom=$nom;
    }
    public function setEspece($espece)
    {
         $this->espece=$espece;
    }
    public function setPrepa($prepa)
    {
         $this->prepa=$prepa;
    }
    public function setEffet($effet)
    {
         $this->effet=$effet;
    }
    public function hydratation($donnée)
    {
        $this->setId($donnée['id']);
        $this->setNom($donnée['nom']);
        $this->setEspece($donnée['espece']);
        $this->setPrepa($donnée['prepa']);
        $this->setEffet($donnée['effet']);
    }
}
