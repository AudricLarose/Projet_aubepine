<?php
namespace model;

include_once 'model/connexion.model.php';
class EffetManager_Model extends Connexion 
{
public function showEffect()
    {
        $id=$_GET['id_plante'];
        $ide=intval($id);
        var_dump($id);
        $req='SELECT * FROM effet WHERE id_plante=?';
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$ide]);
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Effet_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
        }
    }
}