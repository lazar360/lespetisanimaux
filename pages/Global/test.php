<?php

use LDAP\Result;

require_once("../Global/pdo.php");
include("../Commons/header.php");
?>

<?php
$bdd = connexionPDO();
$stmt = $bdd->prepare("SELECT * FROM animal");
$stmt->execute();
$animaux = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
?>

<div class="row no-gutters">
    <?php foreach ($animaux as $animal) : ?>
        <?php
            $stmt = $bdd->prepare('SELECT i.id_image, libelle_image, url_image, description_image 
                    FROM image i 
                    INNER JOIN contient c ON i.id_image = c.id_image
                    INNER JOIN animal a ON a.id_animal = c.id_animal
                    WHERE a.id_animal = :idAnimal
                    LIMIT 1');
            $stmt->bindValue(":idAnimal", $animal['id_animal']);
            $stmt->execute();
            $image = $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
        ?>
        
        <div class="col-12 col-lg-6">
            <div class="row border-dark rounded-lg m-2 align-items-center perso_bgRose" style="height: 200px;">
                <div class="col p-2 text-center">
                    <img src="../../sources/images/Animaux/Chats/<?= $image['url_image'] ?>" class="img-thumbnail" alt="<?= $image['description_image'] ?>" style="max-height: 180px;">
                </div>
                <div class="col-2 border-left border-right border-dark text-center">
                    <img src="../../sources/images/Autres/icones/chienOk.png" class="img-fluid" alt="chien ok" style="width: 50px;">
                    <img src="../../sources/images/Autres/icones/chatOk.png" class="img-fluid" alt="chat ok" style="width: 50px;">
                    <img src="../../sources/images/Autres/icones/babyOk.png" class="img-fluid" alt="bébé ok" style="width: 50px;">

                </div>
                <div class="col-6 text-center">
                    <div class="perso_policeTitre perso_size20 mb-3"><?= $animal['nom_animal'] ?></div>
                    <div class="mb-2">Née : <?= $animal['date_naissance_animal'] ?></div>
                    
                    <!-- <div class="my-3">
                        <span class="badge badge-warning m-1 p-2 d-none d-sm-inline">douce</span>
                        <span class="badge badge-warning m-1 p-2 d-none d-sm-inline">calme</span>
                        <span class="badge badge-warning m-1 p-2 d-none d-md-inline">joueuse</span>
                    </div> -->
                    <!-- <a href="animal.php" class="btn btn-primary">Visiter ma page</a> -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?php include("../Commons/footer.php") ?>