<?php
namespace Coriolis\model ;

class EntityUserModel
{
    private $id;
    private $user;
    private $score;
    private $img;
    private $date;

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
    public function getDate()
    {
        return $this->date;
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
    public function setDate($date)
    {
         $this->date=$date;
    }
    public function hydratation($donnée)
    {
        $this->setId($donnée['id']);
        $this->setUser($donnée['user']);
        $this->setScore($donnée['score']);
        $this->setImg($donnée['img']);
        $this->setDate($donnée['date']);
    }
}
