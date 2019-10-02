<?php
namespace Coriolis\model ;

class EntityPrepaModel
{
    private $id;
    private $id_plante;
    private $prepa;
    public function getId()
    {
        return $this->id;
    }
    public function getIdPlante()
    {
        return $this->id_plante;
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
    public function setIdPlante($id_plante)
    {
         $this->id_plante=$id_plante;
    }
    public function setPrepa($prepa)
    {
         $this->prepa=$prepa;
    }
    public function hydratation($donnée)
    {
        $this->setId($donnée['id']);
        $this->setIdPlante($donnée['id_plante']);
        $this->setPrepa($donnée['prepa']);
    }
}