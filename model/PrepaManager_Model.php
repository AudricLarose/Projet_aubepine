<?php
namespace model;

include_once 'model/connexion.model.php';
class PrepaManager_Model extends Connexion 
{
public function showPrepa()
    {
        $id=$_GET['id_plante'];
        $ide=intval($id);
        var_dump($id);
        $req='SELECT * FROM prepa WHERE id_plante=?';
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$ide]);
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Prepa_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
        }
    }
}