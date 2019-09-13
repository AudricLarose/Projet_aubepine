<?php
namespace controller;

class Documentation_Controller
{
    public function documentation()
    {
        $content_onglet_titre="Documentation";
        $abcd_tab=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        for ($i=0; $i < 24; $i++) {
            $datas= new \model\SearchManager_Model();
            $datas=$datas->searchDataByLetter($abcd_tab[$i]);
            if (isset($datas)) {
                $dataz[$abcd_tab[$i]]=$datas;
            }
        }
    require 'view/recherche_view.php';
    $action= new \tools\Tools();
    $action->body($content,$content_onglet_titre);
    }
}