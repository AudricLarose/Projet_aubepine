<?php
namespace tools;

class Tools
{
    public function body($content_body,$content_onglet_titre){
    	$sessions= new \tools\Tools();
        $session=$sessions->sessionactive();

        if (isset($_SESSION['admin'])) {
            $content_invite_admin='  Bonjour, Monsieur '.ucfirst($_SESSION['admin']);
        } else {
            $content_invite_admin='  Bonjour, invité.';
        }
    require 'view/template_view.php';
 	}
 	public function sessionactive() 
    {
        if (isset($_SESSION['admin'])) {
            if ($_SESSION['admin']=='ok') {
                $session='ok';
                return $session;
            }
        }
    }
}

