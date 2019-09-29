<?php
namespace Coriolis\controller;

class init_Controller
{
    public function init()
    {
        if (isset($_POST['saisie_recherche_par_nom'])) {
            $action= new \Coriolis\model\SearchManager_Model();
            $action->recherche_par_nom();
        }

        if (isset($_POST['inscription'])) {
            $fileNameNew=0;
            if (isset($_FILES['file'])) {
                $file=$_FILES['file'];
                $fileName=$_FILES['file']['name'];
                $fileTmpName=$_FILES['file']['tmp_name'];
                $fileSize=$_FILES['file']['size'];
                $fileError=$_FILES['file']['error'];
                $fileType=$_FILES['file']['type'];
                $fileExt=explode('.', $fileName);
                $fileActualExt= strtolower(end($fileExt));
                $allowed = array('jpg','jpeg','png');
                if (!empty($fileName)) {
                    if (in_array($fileActualExt, $allowed)) {
                        if ($fileError===0) {
                            if ($fileSize<1000000) {
                                $fileNameNew=uniqid('', true).".".$fileActualExt;
                                $fileDestination = 'upload/'.$fileNameNew;
                                move_uploaded_file($fileTmpName, $fileDestination);
                            } else {
                                header('location:index.php?action=montrer_quizz&error=taille');
                                exit();
                            }
                        } else {
                            header('location:index.php?action=montrer_quizz&error=inconnu');
                            exit();
                        }
                    } else  {
                        header('location:index.php?action=montrer_quizz&error=extension');
                        exit();
                    }
                } else {
                    $fileNameNew=0;
                }
            }
            $action= new \Coriolis\model\Users_Manager;
            $action-> login($fileNameNew);
        }

        if (isset($_POST['modifier_photo'])) {
            $name=$_SESSION['admin'];
            $fileNameNew=0;
            if (isset($_FILES['file'])) {
                $file=$_FILES['file'];
                $fileName=$_FILES['file']['name'];
                $fileTmpName=$_FILES['file']['tmp_name'];
                $fileSize=$_FILES['file']['size'];
                $fileError=$_FILES['file']['error'];
                $fileType=$_FILES['file']['type'];
                $fileExt=explode('.', $fileName);
                $fileActualExt= strtolower(end($fileExt));
                $allowed = array('jpg','jpeg','png');
                if (!empty($fileName)) {
                    if (in_array($fileActualExt, $allowed)) {
                        if ($fileError===0) {
                            if ($fileSize<1000000) {
                                $fileNameNew=uniqid('', true).".".$fileActualExt;
                                $fileDestination = 'upload/'.$fileNameNew;
                                move_uploaded_file($fileTmpName, $fileDestination);
                                $action= new \Coriolis\model\Users_Manager;
                                $action-> modifier_photo($fileNameNew, $name);
                            } else {
                                header('location:index.php?action=montrer_quizz&error=taille');
                                exit();
                            }
                        } else {
                            header('location:index.php?action=montrer_quizz&error=inconnu');
                            exit();
                        }
                    } else {
                        header('location:index.php?action=montrer_quizz&error=extension');
                        exit();
                    }
                } else {
                    $fileNameNew=0;
                }
            }
        }
        if (isset($_POST['connexion'])) {
            $action= new \Coriolis\model\Users_Manager;
            $action-> verifie();
        }
        if (isset($_POST['modifier_nom'])) {
            $action= new \Coriolis\model\Users_Manager;
            $ancienname=$_SESSION['admin'];
            $action-> modifier_nom($ancienname);
        }
        if (isset($_POST['saisie_recherche_par_espece'])) {
            $action= new \Coriolis\model\SearchManager_Model();
            $action-> recherche_par_espece();
        }
        if (isset($_POST['recherche_par_effet'])) {
            $action= new \Coriolis\model\SearchManager_Model();
            $action-> recherche_par_effet();
        }
        if (isset($_POST['recherche_par_prepa'])) {
            $action= new \Coriolis\model\SearchManager_Model();
            $action-> recherche_par_prepa();
        }
        if (isset($_POST['recherche_par'])) {
            $action= new \Coriolis\model\SearchManager_Model();
            $action-> recherche_par();
        }
    }
}
