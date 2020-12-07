<?php
function modificationCarte(){   
if (isset($_POST['submit_modifier'])){
    $id = $_POST['indiceModifier'];
    $filenameG = 'libs/data.json';
    $jsonString = file_get_contents($filenameG);
    $jsonArray = json_decode($jsonString, true); 
   
   foreach($jsonArray as $key => $values){
        if($values['id'] == $id){ 
            $jsonArray[$key]['description'] = $_POST['description'];   
            $jsonArray[$key]['prix_lancement'] = $_POST['prix_lancement'];
            $jsonArray[$key]['duree'] = $_POST['duree'];
            $jsonArray[$key]['prix_clic'] = $_POST['prix_clic'];
            $jsonArray[$key]['augmentation_prix'] = $_POST['augmentation_prix'];
            $jsonArray[$key]['augmentation_duree'] = $_POST['augmentation_duree'];
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

