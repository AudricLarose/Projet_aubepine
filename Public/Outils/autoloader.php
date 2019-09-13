<?php
spl_autoload_register('autoloader');
function autoloader ($fichier) {
    $path ='controller/';
    $extension='.php';
    $classs= str_replace(' \ ',' / ',$fichier);
    $fullPath=$classs.$extension;
    require $fullPath;
}