if (isset($_POST['saisie_recherche_par_nom'])) {
	$action= new \model\SearchManager_Model();
	$action->recherche_par_nom();
}

if (isset($_POST['inscription'])) {
	if (isset($_FILES['file'])){
	$file=$_FILES['file'];
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	$fileExt=explode('.', $fileName);
	$fileActualExt= strtolower(end($fileExt));
	$allowed = array('jpg','jpeg','png');
	if (in_array($fileActualExt, $allowed)){
		if ($fileError===0){
			if ($fileSize<1000000){
				$fileNameNew=uniqid('',true).".".$fileActualExt;
				$fileDestination = 'upload/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
			} else {
				echo "trop grand";
			}
		} else {
			echo "erreur";
		}
	} else { echo "erreur: ce n'est pas la bonne extension"; }
} else {
	$fileNameNew=0;
}
	$action= new \model\Users_Manager;
	$action-> login($fileActualExt,$fileNameNew);
}
if (isset($_POST['connexion'])) {
	$action= new \model\Users_Manager;
	$action-> verifie();
}
if (isset($_POST['saisie_recherche_par_espece'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par_espece();
}
if (isset($_POST['recherche_par_effet'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par_effet();
}
if (isset($_POST['recherche_par_prepa'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par_prepa();
}
if (isset($_POST['recherche_par'])) {
	$action= new \model\SearchManager_Model();
	$action-> recherche_par();
}