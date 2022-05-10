<?php

function styleTitreNiveau1($text, $color){
    $txt = "<h2 class='text-center mt-3 ".$color." perso_policeTitre perso_textShadow'>";
    $txt .= $text;
    $txt .= "</h2>";
    return $txt;
}

?>