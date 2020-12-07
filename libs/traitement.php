
<?php
// on recupere les post du fomulaire d'entrer + des propiétés manquantent et on les mets dans un tableau json

if (isset($_POST['submit'])){
    $itemsId = md5(uniqid(rand(), true)); // id unique
    $_POST['id'] = $itemsId; // rajout de l'id 
    $_POST['etat'] = "inactif";
    $_POST['gain'] = 0;
    $_POST['date_fin'] = null;
    unset($_POST['submit']);
    $_POST['description'] = htmlspecialchars($_POST['description']);
    $_POST['duree'] = abs((int)$_POST['duree']);
    $_POST['prix_clic'] = abs((float)$_POST['prix_clic']);
    $_POST['prix_lancement'] = abs((int)$_POST['prix_lancement']);
    $_POST['augmentation_prix'] = abs((float)$_POST['augmentation_prix']);
    $_POST['augmentation_duree'] = abs((int)$_POST['augmentation_duree']);
    echo 
    '<div class="col-12 d-flex justify-content-center">
    <div class="alert alert-success">Le produit a bien été ajouté !</div>
    </div>';

    //on test si le fichier existe 
    $filename = 'libs/data.json';
    if (isset($filename)){
        //fichier existe alors on récupère son contenu on transforme en array
        //retourne le contenu du fichier dans une variable de type string
        $jsonString = file_get_contents($filename);
        //Transforme la structure json en array PHP
        $jsonArray = json_decode($jsonString, true);
        if ($jsonArray){     // si le tableau existe
            array_unshift($jsonArray,$_POST);
            file_put_contents($filename,json_encode($jsonArray));
        }else{
            $jsonArray = []; // si pas de tableau on crée un tableau
            array_unshift($jsonArray,$_POST);
            file_put_contents($filename,json_encode($jsonArray));
           
        }                      
    }

}

  

?>













