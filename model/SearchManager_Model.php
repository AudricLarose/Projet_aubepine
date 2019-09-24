<?php
namespace model;

include_once 'model/connexion.model.php';
class SearchManager_Model extends Connexion 
{
	public function getData () {
		$req='SELECT * FROM plantes' ;
		$resultat=$this->connected()->prepare($req);
		$resultat->execute();
		if($resultat->rowCount()){
			while ($x=$resultat->fetch()){
				$data[]=$x;
			}
			foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Search_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
		} else {
			echo "pas de resultat";
		}
	}
	public function searchDataByLetter ($letter) {
		$req="SELECT * FROM plantes WHERE nom LIKE '".$letter."%'";
		$resultat=$this->connected()->prepare($req);
		$resultat->execute();
		if($resultat->rowCount()){
			while ($x=$resultat->fetch()){
				$data[]=$x;
			}
			foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Search_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;		
        } else {
			echo "pas de resultat";
		}
	}
	public function Selected_Data (){
		$id_plante=$_GET['id_plante'];
		$req='SELECT * FROM plantes WHERE id=?';
		$resultat=$this->connected()->prepare($req);
		$resultat->execute([$id_plante]);
		if($resultat->rowCount()){
		    while ($x=$resultat->fetch()){
			    $data[]=$x;
		    }
			foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Search_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;	
           	} else {
			    echo "pas de resultat";
		}
	}
	public function recherche_par_effet (){
		if (isset($_POST['saisie_recherche_par_effet'])){
		$mot_clef=$_POST['saisie_recherche_par_effet'];
		var_dump($mot_clef);
		$req="SELECT * FROM plantes WHERE effet_1 LIKE '%".$mot_clef."%'";
		$resultat=$this->connected()->prepare($req);
		$resultat->execute();
		if($resultat->rowCount()){
		    while ($x=$resultat->fetch()){
			    $data[]=$x;
		    }
			foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Search_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
		} else {
			    echo "pas de resultat";
		}
	}
}
	public function recherche_par_prepa (){
		if (isset($_POST['saisie_recherche_par_prepa'])){
			$mot_clef=$_POST['saisie_recherche_par_prepa'];
			$req="SELECT * FROM plantes WHERE prepa_1 LIKE '%".$mot_clef."%'";
			$resultat=$this->connected()->prepare($req);
			$resultat->execute();
			if($resultat->rowCount()){
		    	while ($x=$resultat->fetch()){
			    	$data[]=$x;
		    	}
			foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Search_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
			
			} else {
			    echo "pas de resultat";
			}
		}
	}
	public function recherche_par_nom (){
		if (isset($_POST['recherche_par_nom'])){
		$mot_clef=$_POST['recherche_par_nom'];
		$req="SELECT * FROM plantes WHERE nom LIKE '%".$mot_clef."%'";
		$resultat=$this->connected()->prepare($req);
		$resultat->execute();
		if($resultat->rowCount()){
		    while ($x=$resultat->fetch()){

			    $data[]=$x;
		    }
					foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Search_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
		} else {
			    echo "pas de resultat";
		}
	}

}

	public function recherche_par_espece (){
		if (isset($_POST['recherche_par_espece'])){
		$mot_clef=$_POST['recherche_par_espece'];
		var_dump($mot_clef);
		$req="SELECT * FROM plantes WHERE espece LIKE '%".$mot_clef."%'";
		$resultat=$this->connected()->prepare($req);
		$resultat->execute();
		if($resultat->rowCount()){
		    while ($x=$resultat->fetch()){
			    $data[]=$x;
		    }
			foreach ($data as $datas) {
                    $data_hydrated= new \model\Entity_Search_Model();
                    $data_hydrated->hydratation($datas);
                    $datae[]=$data_hydrated;
            }
            return $datae;
		} else {
			    echo "pas de resultat";
		}
	}
}
	public function wordCloud_by ($type,$bdd) {
		$req="SELECT DISTINCT ".$type." FROM  ".$bdd." ORDER BY ".$type;
		$resultat=$this->connected()->prepare($req);
		$resultat->execute();
		if($resultat->rowCount()){
		    while ($x=$resultat->fetch()){
			    $data[]=$x;
		    }
			return $data;
		} else {
			    echo "pas de resultat";
		}
	}
	public function GetPlanteId($name){
        $req="SELECT id FROM plantes WHERE nom='".$name."'";
        $resultat=$this->connected()->prepare($req);
		$resultat->execute();
		if($resultat->rowCount()){
		    while ($x=$resultat->fetch()){
			    $data[]=$x;
		    }
			return $data;
    }
}
}