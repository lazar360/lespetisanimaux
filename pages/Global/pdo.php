<?php 
function connexionPDO() {
    
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_animaux;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $bdd;
    }
    catch(PDOException $e) {
        die('Erreur : '.$e->getMessage());
    }
    return $bdd;
}
?>