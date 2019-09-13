<?php
spl_autoload_register('autoloader_model');
function autoloader_model ($fichier) {
    $path ='model/';
    $extension='.model.php';
    $classs= str_replace(' \ ',' / ',$fichier);
    $fullPath=$classs.$extension;
    require $fullPath;
}