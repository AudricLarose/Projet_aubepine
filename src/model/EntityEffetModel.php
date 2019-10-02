<?php
namespace Coriolis\model ;

class EntityEffetModel
{
    private $id;
    private $id_plante;
    private $effet;
    public function getId()
    {
        return $this->id;
    }
    public function getIdPlante()
    {
        return $this->id_plante;
    }
    public function getEffet()
    {
        return $this->effet;
    }
    
    public function setId($id)
    {
        $this->id=$id;
    }
    public function setNom($nom)
    {
         $this->nom=$nom;
    }
    public function setIdPlante($id_plante)
    {
         $this->id_plante=$id_plante;
    }
    public function setEffet($effet)
    {
         $this->effet=$effet;
    }
    public function hydratation($donnée)
    {
        $this->setId($donnée['id']);
        $this->setIdPlante($donnée['id_plante']);
        $this->setEffet($donnée['effet']);
    }
}