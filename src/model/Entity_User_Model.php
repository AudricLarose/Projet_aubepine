<?php
namespace Coriolis\model ;

class Entity_User_Model 
{
    private $id;
    private $user;
    private $score;
    private $img;

    public function getId()
    {
        return $this->id;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getScore()
    {
        return $this->score;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setId($id)
    {
        $this->id=$id;
    }
    public function setUser($user)
    {
         $this->user=$user;
    }
    public function setScore($score)
    {
         $this->score=$score;
    }
    public function setImg($img)
    {
         $this->img=$img;
    }
    public function hydratation ($donnée)
    {
        $this->setId($donnée['id']);
        $this->setUser($donnée['user']);
        $this->setScore($donnée['score']);
        $this->setImg($donnée['img']);
    }
}
