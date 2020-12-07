<?php //on recupere les valeurs du formulaire de modification pour ecraser les anciennes
function modificationCarte(){   
if (isset($_POST['submit_modifier'])){
    $id = $_POST['indiceModifier'];
    $filenameG = 'libs/data.json';
    $jsonString = file_get_contents($filenameG);
    $jsonArray = json_decode($jsonString, true); 
   
   foreach($jsonArray as $key => $values){
        if($values['id'] == $id){ 
            $jsonArray[$key]['description'] = htmlspecialchars($_POST['description']);   
            $jsonArray[$key]['prix_lancement'] = abs((int)$_POST['prix_lancement']);
            $jsonArray[$key]['duree'] = abs((int)$_POST['duree']);
            $jsonArray[$key]['prix_clic'] = abs((float)$_POST['prix_clic']);
            $jsonArray[$key]['augmentation_prix'] = abs((float)$_POST['augmentation_prix']);
            $jsonArray[$key]['augmentation_duree'] = abs((int)$_POST['augmentation_duree']);
        file_put_contents($filenameG,json_encode($jsonArray));
        }
    }
    echo 
    '<div class="col-12 d-flex justify-content-center">
    <div class="alert alert-success">Le produit a bien été modifié !</div>
    </div>';
}
};
?>

