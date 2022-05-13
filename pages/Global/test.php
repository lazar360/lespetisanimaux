<?php include("../Commons/header.php"); ?>

<?php 
$bdd = new PDO('mysql:host=localhost;dbname=nanasite;charset=utf8', 'root', '');
$stmt = $bdd->prepare("SELECT * FROM animal");
$stmt->execute();
$resultats = $stmt->fetchAll();
$stmt->closeCursor();

echo "<pre>";
print_r($resultats);

?>

<?php include("../Commons/footer.php") ?>