<?php
namespace Coriolis\model;

class PrepaManager_Model extends Connexion_model 
{
    public function showPrepa()
    {
        $id=$_GET['id_plante'];
        $ide=intval($id);
        $req='SELECT * FROM prepa WHERE id_plante=?';
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$ide]);
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            foreach ($data as $datas) {
                    $data_hydrated= new \Coriolis\model\Entity_Prepa_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
        }
    }
}
