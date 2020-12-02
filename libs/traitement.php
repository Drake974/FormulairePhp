
<?php

if (isset($_POST['submit'])){
    
$carteProduit = array (
    "description" => $_POST['description'],
    "image" => $_POST['image'],
    "prix_lancement" => $_POST['prix_lancement'],
    "duree" => $_POST['duree'],
    "prix_clic" => $_POST['prix_clic'],
    "augmentation_prix" => $_POST['augmentation_prix'],
    "augmentation_duree" => $_POST['augmentation_duree']

);
//on test si le fichier existe 
$filename = 'libs/data.json';
if (isset($filename)){
    //fichier existe alors on récupère son contenu on transforme en array
    //retourne le contenu du fichier dans une variable de type string
    $jsonString = file_get_contents($filename);
    //Transforme la structure json en array PHP
    $jsonArray = json_decode($jsonString, true);
}
//ajout des données postées au tableau
//on ajoute une nouvelle entrée dans le tableau
if($jsonArray == NULL){
    file_put_contents($filename, json_encode($carteProduit));
}else{
   array_push($jsonArray, $carteProduit);

    //ecraser le fichier json avec la nouvelle structure à partir du tableau
   file_put_contents($filename, json_encode($jsonArray));
}

}


?>













