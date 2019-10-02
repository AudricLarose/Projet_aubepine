<?php
namespace Coriolis\model;

class SearchManagerModel extends ConnexionModel
{
    public function getData()
    {
        $req='SELECT * FROM plantes' ;
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            foreach ($data as $datas) {
                    $data_hydrated= new \Coriolis\model\EntitySearchModel();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
        } else {
            echo "pas de resultat";
        }
    }
    public function searchDataByLetter($letter)
    {
        $req="SELECT * FROM plantes WHERE nom LIKE '".$letter."%'";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            foreach ($data as $datas) {
                    $data_hydrated= new \Coriolis\model\EntitySearchModel();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
        }
    }
    public function selectedData()
    {
        $id_plante=$_GET['id_plante'];
        $req='SELECT * FROM plantes WHERE id=?';
        $resultat=$this->connected()->prepare($req);
        $resultat->execute([$id_plante]);
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            foreach ($data as $datas) {
                    $data_hydrated= new \Coriolis\model\EntitySearchModel();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
                return $datae;
        } else {
            echo "pas de resultat";
        }
    }
    public function rechercheParEffet()
    {
        if (isset($_POST['effet'])) {
            $mot_clef=$_POST['effet'];
            $req="SELECT * FROM plantes WHERE effet LIKE '%".$mot_clef."%'";
            $resultat=$this->connected()->prepare($req);
            $resultat->execute();
            if ($resultat->rowCount()) {
                while ($x=$resultat->fetch()) {
                    $data[]=$x;
                }
                foreach ($data as $datas) {
                        $data_hydrated= new \Coriolis\model\EntitySearchModel();
                        $data_hydrated->hydratation($datas);
                        $datae[]=[ "requete" => $mot_clef];
                        $datae[]=$data_hydrated;
                }
                $datae[]=[ "requete" => $mot_clef];
                return $datae;
            } else {
                    echo "pas de resultat";
            }
        }
    }
    public function rechercheParPrepa()
    {
        if (isset($_POST['prepa'])) {
            $mot_clef=$_POST['prepa'];
            $req="SELECT * FROM plantes WHERE prepa LIKE '%".$mot_clef."%'";
            $resultat=$this->connected()->prepare($req);
            $resultat->execute();
            if ($resultat->rowCount()) {
                while ($x=$resultat->fetch()) {
                    $data[]=$x;
                }
                foreach ($data as $datas) {
                    $data_hydrated= new \Coriolis\model\EntitySearchModel();
                    $data_hydrated->hydratation($datas);
                    $datae[]=[ "requete" => $mot_clef];
                    $datae[]=$data_hydrated;
                    }
                return $datae;
            } else {
                echo "pas de resultat";
            }
        }
    }
    public function rechercheParNom()
    {
        if (isset($_POST['recherche_par_nom'])) {
            $mot_clef=$_POST['recherche_par_nom'];
            $req="SELECT * FROM plantes WHERE nom LIKE '%".$mot_clef."%'";
            $resultat=$this->connected()->prepare($req);
            $resultat->execute();
            if ($resultat->rowCount()) {
                while ($x=$resultat->fetch()) {
                    $data[]=$x;
                }
                foreach ($data as $datas) {
                    $data_hydrated= new \Coriolis\model\EntitySearchModel();
                    $data_hydrated->hydratation($datas);
                    $datae[]=[ "requete" => $mot_clef];
                    $datae[]=$data_hydrated;
                }
                return $datae;
            } else {
                    echo "pas de resultat";
            }
        }
    }
    public function rechercheParEspece()
    {
        if (isset($_POST['recherche_par_espece'])) {
            $mot_clef=$_POST['recherche_par_espece'];
            $req="SELECT * FROM plantes WHERE espece LIKE '%".$mot_clef."%'";
            $resultat=$this->connected()->prepare($req);
            $resultat->execute();
            if ($resultat->rowCount()) {
                while ($x=$resultat->fetch()) {
                    $data[]=$x;
                }
                foreach ($data as $datas) {
                        $data_hydrated= new \Coriolis\model\EntitySearchModel();
                        $data_hydrated->hydratation($datas);
                        $datae[]=[ "requete" => $mot_clef];
                        $datae[]=$data_hydrated;
                }
                $datae[]=[ "requete" => $mot_clef];
                return $datae;
            } else {
                    echo "pas de resultat";
            }
        }
    }
    public function wordCloudBy($type, $bdd)
    {
        $req="SELECT DISTINCT ".$type." FROM  ".$bdd." ORDER BY ".$type;
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            return $data;
        } else {
                echo "pas de resultat";
        }
    }
    public function getPlanteId($name)
    {
        $req="SELECT id FROM plantes WHERE nom='".$name."'";
        $resultat=$this->connected()->prepare($req);
        $resultat->execute();
        if ($resultat->rowCount()) {
            while ($x=$resultat->fetch()) {
                $data[]=$x;
            }
            return $data;
        }
    }
}
