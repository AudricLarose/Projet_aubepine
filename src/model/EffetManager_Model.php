<?php
namespace Coriolis\model;

class EffetManager_Model extends Connexion_model
{
public function showEffect()
    {
        $id=$_GET['id_plante'];
        $ide=intval($id);
        $req='SELECT * FROM effet WHERE id_plante=?';
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$ide]);
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            foreach ($data as $datas) {
                    $data_hydrated= new \Coriolis\model\Entity_Effet_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
        }
    }
}