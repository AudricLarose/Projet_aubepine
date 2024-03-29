<?php
namespace Coriolis\controller;

class DocumentationController
{
    public function documentation($twig)
    {
        try {
            $abcd_tab=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
            for ($i=0; $i < 24; $i++) {
                $datas= new \Coriolis\model\SearchManagerModel();
                $datas=$datas->searchDataByLetter($abcd_tab[$i]);
                if (isset($datas)) {
                    $dataz[$abcd_tab[$i]]=$datas;
                }
            }
            echo $twig->render('recherche_view.html.twig',['abcd_tab'=> $abcd_tab, 'dataz'=> $dataz]);
        } catch (\Exception $e) {
                echo $twig->render('erreur_404.html.twig');
        }
    }
}
