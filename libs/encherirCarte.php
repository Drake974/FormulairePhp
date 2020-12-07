
<?php

    //Ici on gere l'ajout du prix à augmenter
    if(isset($_POST['encherir'])){
        $id = $_POST['inputEncherir'];
        $filenameC = 'libs/data.json';
        $jsonString = file_get_contents($filenameC);
        $jsonArray = json_decode($jsonString, true);

       foreach($jsonArray as $key => $values){
            if($values['id'] == $id){          
                $jsonArray[$key]['prix_lancement'] = $jsonArray[$key]['prix_lancement'] + $jsonArray[$key]['augmentation_prix'];
                $jsonArray[$key]['date_fin'] = $jsonArray[$key]['date_fin'] + $jsonArray[$key]['augmentation_duree'];
                $jsonArray[$key]['gain'] = $jsonArray[$key]['gain'] + $jsonArray[$key]['prix_clic'];        
            file_put_contents($filenameC,json_encode($jsonArray));
           
            }
        }
    }
  
?>
