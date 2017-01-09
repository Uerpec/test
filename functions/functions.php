<?php

function fileScanner($dir, $folder){
    $array = scandir($dir.$folder);
    foreach ($array as $f){
        if ($f!='.' and $f!='..') {
            $images[] = $folder.$f;
        }
    }
    return $images;
}