<?php
namespace Coriolis\model;

class PrepaManagerModel extends ConnexionModel 
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
                    $data_hydrated= new \Coriolis\model\EntityPrepaModel();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
        }
    }
}
