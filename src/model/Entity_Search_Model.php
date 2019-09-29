<?php
namespace Coriolis\model ;

class Entity_Search_Model 
{
    private $id;
    private $nom;
    private $espece;
    private $effet_1;
    private $prepa_1;
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
        return $this->effet_1;
    }
    public function getPrepa()
    {
        return $this->prepa_1;
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
    public function setPrepa($prepa_1)
    {
         $this->prepa_1=$prepa_1;
    }
    public function setEffet($effet_1)
    {
         $this->effet_1=$effet_1;
    }
    public function hydratation ($donnée)
    {
        $this->setId($donnée['id']);
        $this->setNom($donnée['nom']);
        $this->setEspece($donnée['espece']);
        $this->setPrepa($donnée['prepa_1']);
        $this->setEffet($donnée['effet_1']);
    }
}