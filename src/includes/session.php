


<?php 
if (isset($_POST['submit'])){
$description = htmlspecialchars($_POST["description"]);
$image_upload = $_POST["image_upload"];
var_dump($image_upload);
$prix_lancement = $_POST["prix_lancement"];
$duree = $_POST["duree"];
$prix_clic = $_POST["prix_clic"];
$augmentation_prix = $_POST["augmentation_prix"];
$augmentation_duree = $_POST["augmentation_duree"];

$_SESSION["description"] = $description;
$_SESSION["image_upload"] = $image_upload;
$_SESSION["prix_lancement"] = $prix_lancement;
$_SESSION["duree"] = $duree;
$_SESSION["prix_clic"] = $prix_clic;
$_SESSION["augmentation_prix"] = $augmentation_prix;
$_SESSION["augmentation_duree"] = $augmentation_duree;
}
?>
